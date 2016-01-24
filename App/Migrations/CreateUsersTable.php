<?php
namespace App\Migrations;

use Aer\Database\Migration;
use Aer\Database\DatabaseTable;

class CreateUsersTable extends Migration
{
    public static function up()
    {
        //
        $table = new DatabaseTable();
        $table->tableName = "users";
        $table->varchar('name', 255);
        $table->integer('user_id', 10);
        $table->create();
    }

    public static function down()
    {
        //
    }
}