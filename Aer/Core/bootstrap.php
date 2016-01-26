<?php

require __DIR__.'/../../vendor/autoload.php';

use Aer\Core\Aer;
use App\Migrations\CreateUsersTable;
use App\Migrations\CreateMigrationsTable;
use App\Modules\User\User;
use Aer\Core\Http\Router;
print Aer::init();


//TESTING AREA< CLEAN UP WHEN MOVED TO APPROPRIATE PLACES
CreateUsersTable::up();
CreateMigrationsTable::up();
//CreateMigrationsTable::down();

//print_r(User::all());
print "::";
$user = User::find(1);
print_r($user);
print "::";
print "::";
$user = User::find(2);
print_r($user);
print "::";
print "::";
$users = User::all();
print_r($users);
print "::";
print "<hr>";
print_r(Router::get());
print "<hr>";
