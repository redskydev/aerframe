<?php
namespace Aer\Core;

use Aer\Database\MysqlConnection;


class Aer
{
    public static function init()
    {
        $config_options = self::GetConfigurationOptions();
        $database_options = $config_options->database;
        print_r($config_options);
        print_r($database_options);
        print_r(MysqlConnection::connect($database_options));

        return "Serving Aer";
    }

    public static function GetConfigurationOptions()
    {
        $config_path = __DIR__ . "/../../App/Config/config.json";
        if (!file_exists($config_path)) {
            header('Location: /install.php');
        } else {
            $config_json = json_decode(file_get_contents($config_path));
//            print_r($config_json);

            return $config_json;
        }
    }

}