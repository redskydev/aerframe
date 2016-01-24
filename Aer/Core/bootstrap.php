<?php

require __DIR__.'/../../vendor/autoload.php';

use Aer\Core\Aer;
use App\Migrations\CreateUsersTable;
use App\Migrations\CreateMigrationsTable;

print Aer::init();

print CreateUsersTable::up();
CreateMigrationsTable::up();
CreateMigrationsTable::down();