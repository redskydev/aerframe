<?php
namespace App\Modules\User;

use Aer\Core\Controller\AerController;
use Aer\Core\View\View;

//use App\Modules\User\User;

class UserController extends AerController {

  public static function show($id) {
    return User::find($id);
  }

  public static function all(){
    return User::all();
  }

  public static function testshow($id) {
    $user = User::find($id);
    $template_path =  __DIR__ . "/Theme/Show.php";
    return View::render($template_path, compact('user'));

//    //using output buffering right now to use views
//    //i dont this this is terribly elegant but could throw in a class to abstract it out
//    ob_start();
//    require __DIR__ . "/Theme/Show.php";
//    $view = ob_get_contents();
//    ob_end_clean();
//    //end output buffering
//    return $view;
  }
}