<?php

require __DIR__.'/../../vendor/autoload.php';

use Aer\Core\Aer;
use App\Migrations\CreateUsersTable;
print Aer::init();

print CreateUsersTable::up();

