<?php
  final class Emoji {
    private $size;
    private $emojis;

    private static $instace;

    public static function instance() {
      static $instance = null;
      if ($instance === null) {
        $instance = new Emoji();
      }

      return $instance;
    }

    private function __construct($size = 20) {
      $this->emojis = array();
      $this->size = $size;
      $this->populate();
    }

    private function populate() {
      foreach (scandir('./lib') as $emoji) {
        $this->emojis[] = str_replace('.png', '', $emoji);
      }
    }

    private function locate($emoji) {
      if (in_array($emoji, $this->emojis)) {
        return './lib/' . $emoji . '.png';
      } else {
        return false;
      }
    }

    public function html($emoji) {
      $format = '<img src=\'%s\' width=\'%d\' height=\'%d\' title=\'%s\' alt=\'%s\'>';

      $formatted = preg_replace('/:/', '', $emoji);

      return sprintf($format,
        $this->locate($formatted),
        $this->size, $this->size,
        $emoji, $emoji
      );
    }

    public function render($text) {
      $result = $text;
      $matches = array();

      preg_match_all("/:[a-zA-Z0-9_]+:/", $result, $matches);

      foreach ($matches[0] as $emoji) {
        $result = preg_replace('/' . $emoji . '/', $this->html($emoji), $result);
      }

      return $result;
    }
  }
?>
