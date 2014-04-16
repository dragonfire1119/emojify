# emojify

Lightweight Emoji library built for PHP.

## installation

1. Install [Composer](https://getcomposer.org).
2. Require emojify with `composer require ttaylorr/emojify 0.0.1`
3. Install all dependencies with `composer install`

## example usage

```php
<?php
  require_once __DIR__ . '/vendor/autoload.php';
  
  $text = 'Hello world, this is Emojify! :shipit:';
  echo Emoji::instance()->render($text);
?>
```

And you get:

![demo image](http://puu.sh/8ai3X.png)
