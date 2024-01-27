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

$app->get('/cadastrar', function(){

    $page = new Page();

    $page->setTpl("cadastrar");

});

$app->post('/cadastrar', function(){

    $tarefa = new Tarefas();

    $tarefa->setData($_POST);

    $tarefa->save();

    header("Location: /");
    exit;

    });

$app->get('/editar/:id', function($id) {

    $tarefa = new Tarefas();

    $tarefa->get((int)$id);

    $page = new Page();

    $page->setTpl("editar", [

        "tarefa"=>$tarefa->getValues()

    ]);
});

$app->post('/editar/:id', function($id) {

    $tarefa = new Tarefas();

    $tarefa->get((int)$id);

    $tarefa->setData($_POST);

    $tarefa->update();

    header("Location: /");
    exit;

});

$app->get('/:id', function($id){

    $tarefa = new Tarefas();

    $tarefa->get((int)$id);

    $tarefa->delete();

    header("Location: /");
    exit;

});

$app->get('/baixar', function(){

    $page = new Page();

    $page->setTpl("baixo");

});

$app->run();

?>