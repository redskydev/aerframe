<?php

namespace Aer\Database;


class MysqlConnection implements DatabaseConnection
{


    public function connect($credentials){
// Create connection
        $host = $credentials->host;
        if($credentials->port != null){
            $host .= ":" . $credentials->port;
        }
        $conn = new \mysqli(
            $credentials->host,
            $credentials->username,
            $credentials->password,
            $credentials->database
        );
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        return $conn;
    }

    public function close($connection){
        $connection->close();
    }

}