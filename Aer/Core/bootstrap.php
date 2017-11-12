<?php

namespace Aer\Core;

require __DIR__ . '/../../vendor/autoload.php';

use Aer\Core\Http\Router;

// Initialize Aer
print Aer::init();

// Get the page based on the HTTP request
print Router::get();
