<?php
/**
 * Created by PhpStorm.
 * User: scjac_000
 * Date: 1/26/2016
 * Time: 1:18 PM
 */

namespace Aer\Core\View;


class View {

  public static function render($template_path, $vars){
    ob_start();
    require $template_path;
    $view = ob_get_contents();
    ob_end_clean();
    return $view;
  }

}