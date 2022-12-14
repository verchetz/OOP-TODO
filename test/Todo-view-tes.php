<?php

require_once __DIR__ . "/../entity/Todo.php";
require_once __DIR__ . "/../view/Todo-view.php";
require_once __DIR__ . "/../service/Todo-svc.php";
require_once __DIR__ . "/../repo/Todo-repo.php";
require_once __DIR__ . "/../helper/input.php";
use View\TodoView;
use Entity\Todo;
use Service\TodoSvcImpl;
use Repo\TodoRepoImpl;

function tesViewShow(){
    $todoRepo = new TodoRepoImpl();
    $todoSvc = new TodoSvcImpl($todoRepo);
    $todoView = new TodoView($todoSvc);

    $todoSvc->addTodo('Bermain');
    $todoSvc->addTodo('Belajar');
    $todoSvc->addTodo('Berputar');

    $todoView->showTodo();
}
function tesAddTodo(){
    $todoRepo = new TodoRepoImpl();
    $todoSvc = new TodoSvcImpl($todoRepo);
    $todoView = new TodoView($todoSvc);

    $todoSvc->addTodo('Bermain');
    $todoSvc->addTodo('Belajar');
    $todoSvc->addTodo('Berputar');

    $todoSvc->showTodo();

    $todoView->addTodo();

    $todoSvc->showTodo();
}
function tesRmvTodo(){
    $todoRepo = new TodoRepoImpl();
    $todoSvc = new TodoSvcImpl($todoRepo);
    $todoView = new TodoView($todoSvc);

    $todoSvc->addTodo('Bermain');
    $todoSvc->addTodo('Belajar');
    $todoSvc->addTodo('Berputar');

    $todoSvc->showTodo();

    $todoView->rmvTodo();

    $todoSvc->showTodo();
}
TesRmvTodo();