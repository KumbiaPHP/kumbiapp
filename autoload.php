<?php
require 'vendor/autoload.php';
$autoload = function($class){
    $file = str_replace('\\', '//', $class);
    require "src/$file.php";
 };
spl_autoload_register($autoload, true);
