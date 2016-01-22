<?php

$config_path =  __DIR__ . "/../../../App/Config/config.json";
echo $config_path;
//print_r(file_get_contents($config_path));
$config_json = json_decode(file_get_contents($config_path));
print_r($config_json);