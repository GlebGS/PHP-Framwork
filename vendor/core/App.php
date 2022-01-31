<?php

namespace core;

class App
{

  public static $app;

  public function __construct(){
    $query = trim($_SERVER['QUERY_STRING'], '/');
    session_start();

    self::$app = Registry::instance();
    $this::getParams();

    new ErrorHandler();
  }

  protected static function getParams(){
    $params = require CONFIG . '/params.php';
    if (!empty($params)){
      foreach ($params as $k => $v){
        self::$app::setStorage($k, $v);
      }
    }
  }
}