<?php
define('START_TIME', microtime(TRUE));
error_reporting(E_ALL);
require __DIR__.'/../autoload.php';
use Kumbia\App;
$app = new App(__DIR__."/../src", '/dikumbiapp/public/');
$app->execute();