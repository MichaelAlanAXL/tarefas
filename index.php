<?php 

require_once("vendor/autoload.php");

use \Slim\Slim;
use \App\Page;

$app = new Slim();

$app->config('debug', true);

//echo "hello world!";
$app->get('/', function(){

    //$products = Product::listAll();

    $page = new Page();

    $page->setTpl("index");

});

$app->run();

 ?>