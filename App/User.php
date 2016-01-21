<?php

namespace App;

use Aer\Core\Model\AerModel;

class User extends AerModel
{
    protected static $table = 'users';
    protected static $fillable = array();
    protected static $primary_key = "user_id";



}