<?php

use Amirkamizi\PhpRouter\Router;

require_once 'Router.php';
 

Router::get('/test/[0-9]*', 'TestController', 'show');