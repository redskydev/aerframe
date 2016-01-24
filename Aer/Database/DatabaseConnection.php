<?php
namespace Aer\Database;


interface DatabaseConnection
{
    public function connect($credentials);
    public function close($connection);

}