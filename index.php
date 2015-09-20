<?php 
error_reporting(E_ALL);
use Symfony\Component\Console\Application;
require __Dir__ . '/vendor/autoload.php';
$app=new Application();
$app->run();
echo 'Hello world';

?>