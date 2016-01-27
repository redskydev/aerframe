<?php
namespace App\Packages\User;

use Aer\Core\Controller\AerController;
use Aer\Core\View\View;

//use App\Packages\User\User;

class UserController extends AerController {

  public static function show($id) {
    return View::json(User::find($id));
  }

  public static function all(){
    return View::json(User::all());
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