<?php

namespace Aer\Core\Http;


class Router
{
    // Namespace for application packages
    private static $appPackageNamespace = "\\App\\Packages";

    // GET requests
    // Right now it's just getting route parameters and not actually looking
    //  to see if it's an actual GET request
    //  otherwise, go to the index page
    // @todo make this an actual GET request
    public static function get()
    {

        //PARAMETERS WE EXPECT
        //@todo add error handling
        if (!empty($_GET)) {
            // Generate a package name and capitalize it per Aer standards
            $package = "\\" . ucfirst($_GET['package']);

            // Grab the controller method the user is requesting
            $method = $_GET['method'];

            // Get the ID of the record
            $id = $_GET['id'];

            // Build the controller name
            $controller = $package . "Controller";

            // Check to see if the method exists in the controller and if so
            //  call the method, otherwise we should throw and error
            if (method_exists(static::$appPackageNamespace . $package . $controller,
              $method)) {
                return call_user_func(
                  static::$appPackageNamespace . $package . $controller . "::" . $method,
                  $id);
            }

            // Debug output
            print_r($_GET);

        } else {
            return BaseController::index();
        }
    }

    //public static function methodOnController()
    //{
    //    return $appPackageNamespace . $package . $controller . "::" . $method;
    //}
}