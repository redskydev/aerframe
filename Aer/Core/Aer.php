<?php

namespace Aer\Core;

use Aer\Database\MysqlConnection;


class Aer
{

    public static function init()
    {
        // Get Database Connection
        $conn = MysqlConnection::connect();

        // Set the default configuration path
        $config_path = __DIR__ . "/../../App/Config/config.json";

        // If the file doesn't exist, provide an error message
        if (!file_exists($config_path)) {
            return "Serving Aer. Please setup the config file.";
        }
    }

    public static function GetConfigurationOptions()
    {
        // Set the default configuration path
        $config_path = __DIR__ . "/../../App/Config/config.json";

        // If the file doesn't exist then go to the install script
        //  otherwise read the configuration file and return it's json
        if (!file_exists($config_path)) {
            header('Location: /install.php');
        } else {
            $config_json = json_decode(file_get_contents($config_path));
            return $config_json;
        }
    }

    public static function GetDatabaseOptions()
    {
        return self::GetConfigurationOptions()->database;
    }

}