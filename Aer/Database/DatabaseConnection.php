<?php
namespace Aer\Database;


interface DatabaseConnection
{
    public function connect();
    public function close();

}