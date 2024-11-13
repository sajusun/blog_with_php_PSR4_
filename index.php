<?php
namespace App;
//header('location:./public');

//
//use Core\App;
//
//require_once 'core/App.php';
//require_once 'core/Route.php';
//require_once 'core/Controller.php';
//require_once 'core/Model.php';
//require_once 'core/View.php';
//require_once 'core/Database.php';
//require_once 'routes/web.php';
//
//$app = new App();

use Core\App;

require_once __DIR__.'/vendor/autoload.php';
require_once __DIR__.'/routes/web.php';
require_once __DIR__.'/config.php';

new App();