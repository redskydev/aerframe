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
  }

  public static function something($id) {
    $user = User::find($id);
    $template_path =  __DIR__ . "/Theme/All.php";
    return View::render($template_path, compact('user'));
  }
}