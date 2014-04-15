# emojify

Lightweight Emoji library built for PHP.

## example usage

```php
<?php
  require_once 'Emoji.class.php';
  
  $text = 'Hello world, this is Emojify! :shipit:';
  echo Emoji::instance()->render($text);
?>
```

And you get:

![demo image](http://puu.sh/8ai3X.png)
