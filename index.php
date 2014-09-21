<?php
define('START_TIME', microtime(TRUE));
require __DIR__.'/autoload.php';
use Kumbia\App;
$app = new App(__DIR__."/src");
$app->execute();