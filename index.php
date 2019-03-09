<?php

require 'vendor/autoload.php';
require 'app/core/bootstrap.php';

use App\Core\Router;
use App\Core\Request;
session_start();
Router::load('routes.php')->direct(Request::uri(), Request::method());