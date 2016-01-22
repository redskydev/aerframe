<?php
namespace Aer\Core;


class Aer
{
    public static function init()
    {
        self::GetConfigurationOptions();
        return "Serving Aer";
    }

    public static function GetConfigurationOptions()
    {
        $config_path = __DIR__ . "/../../App/Config/config.json";
        if (!file_exists($config_path)) {
            header('Location: /install.php');
        } else {
            $config_json = json_decode(file_get_contents($config_path));
            print_r($config_json);
        }
    }

}