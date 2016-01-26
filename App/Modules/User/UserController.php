<?php
namespace App\Modules\User;

use Aer\Core\Controller\AerController;
use App\Modules\User\User;

class UserController extends AerController {

  public static function show($id) {
    return User::find($id);
  }

  public static function all(){
    return User::all();
  }
}