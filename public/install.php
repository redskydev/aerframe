<?php

// Looking for the configuration file and if it exists, go to the index
//  otherwise proceed to the installation
if(file_exists(__DIR__ . "/../App/Config/config.json")){
    header("Location: /index.php");
} else {
    // @todo Create Install Script
    echo "INSTALL FILE";
}