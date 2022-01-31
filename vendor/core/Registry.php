<?php

namespace core;

class Registry
{
  use TSingletone;

  protected static $storage = [];

  public static function setStorage($key, $value){
    return self::$storage[$key] = $value;
  }

  public static function getStorage($key){
    return isset(self::$storage[$key]) ? self::$storage[$key] : null;
  }

  public static function printStorage(){
    return self::$storage;
  }
}