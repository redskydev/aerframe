<?php

require __DIR__.'/../../vendor/autoload.php';

use Aer\Core\Aer;
use App\Migrations\CreateUsersTable;
use App\Migrations\CreateMigrationsTable;
use App\User;

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