<?php
namespace Aer\Database;


interface DatabaseConnection
{
    public static function connect();
    public function close($connection);

}