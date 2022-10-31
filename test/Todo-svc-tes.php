<?php

use Service\TodoSvcImpl;
use Repo\TodoRepoImpl;
use Entity\Todo;

require_once __DIR__ . "/../service/Todo-svc.php";
require_once __DIR__ . "/../repo/Todo-repo.php";
require_once __DIR__ . "/../entity/Todo.php";



function tesShowTodo(){
    $todoRepo = new TodoRepoImpl();
    $todoRepo->todo[1] = new Todo("Angular");
    $todoRepo->todo[2] = new Todo("React");
    $todoRepo->todo[3] = new Todo("Vue");

    $todoSvc = new TodoSvcImpl($todoRepo);

    $todoSvc->showTodo();
}
function tesAddTodo(){
    $todoRepo = new TodoRepoImpl();

    $todoSvc = new TodoSvcImpl($todoRepo);
    $todoSvc->addTodo("Angular");
    $todoSvc->addTodo("Angular");
    $todoSvc->addTodo("Angular");

    $todoSvc->showTodo();
}
function tesRmvTodo(){
    $todoRepo = new TodoRepoImpl();

    $todoSvc = new TodoSvcImpl($todoRepo);
    $todoSvc->addTodo("Angular");
    $todoSvc->addTodo("Angular");
    $todoSvc->addTodo("Angular");

    $todoSvc->showTodo();

    $todoSvc->rmvTodo(1);
    $todoSvc->showTodo();
}

// tesShowTodo();
// tesAddTodo();
tesRmvTodo();