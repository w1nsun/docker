<?php
ini_set('display_errors', true);
error_reporting(E_ALL);

$manager = new MongoDB\Driver\Manager("mongodb://mongo:27018");
var_dump($manager);

//echo phpinfo();