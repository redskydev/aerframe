<?php

namespace Aer\Core\View;


class View {

  public static function render($template_path, $vars){
    ob_start();
    require $template_path;
    $view = ob_get_contents();
    ob_end_clean();
    return $view;
  }

  public static function json($vars){
    return print_r(json_encode($vars), true);
  }

}