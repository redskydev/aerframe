<?php

namespace Aer\Core\Http;


class Router {

  private static $appModuleNamespace = "\\App\\Modules";

  public static function get(){
    //PARAMETERS WE EXPECT
    //@todo add error handling
    $module = "\\" . ucfirst($_GET['module']);
    $method = $_GET['method'];
    $id = $_GET['id'];

    $controller = $module . "Controller";

    return call_user_func(static::$appModuleNamespace . $module . $controller . "::" . $method, $id);

  }

}