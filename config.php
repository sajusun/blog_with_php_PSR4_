<?php

// config.php

define('ROOT_PATH', realpath(__DIR__ . '/')); // Adjust as needed

const BASE_PATH = "http://localhost/public/"; // This will be the root of your project
const rootProject = '../../core_php';// This will be the root of your project
const BaseDir = '/core_php/public/';// This will be the basedir of your project
const root = ROOT_PATH.'/';// This will be the root of your project

$_ENV['url']="http://localhost";
$_ENV['public']="http://localhost/public/";

// In a config file or bootstrap file, e.g., config.php

// In any file
//require ROOT_PATH . '/somefile.php';
