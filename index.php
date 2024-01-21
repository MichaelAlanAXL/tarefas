<?php 

require_once("vendor/autoload.php");

use \Slim\Slim;
use \App\Page;
use \App\Model\Tarefas;

$app = new Slim();

$app->config('debug', true);

$app->get('/', function(){

    $dados = Tarefas::listAll();    
    
    $page = new Page();    

    $page->setTpl("index", [
        
        'dados'=>$dados

    ]);

});

$app->run();

 ?>