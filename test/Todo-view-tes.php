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
tesViewShow();