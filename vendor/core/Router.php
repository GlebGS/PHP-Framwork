<?php

namespace core;

class Router
{

  protected static $routes = [];
  protected static $route = [];

  public static function add($name, $route = []){
    self::$routes[$name] = $route;
  }

  public static function getRoutes(){
    return self::$routes;
  }

  public static function getRoute(){
    return self::$route;
  }
}