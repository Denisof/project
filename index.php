<?php 
error_reporting(E_ALL);
use app\commands\HelloCommand;
use Symfony\Component\Console\Application;
require __Dir__ . '/vendor/autoload.php';
$app=new Application();
$app->add(new HelloCommand());
$app->run();
echo 'Hello world';

?>