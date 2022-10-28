<?php

use Service\TodoSvcImpl;
use Repo\TodoRepoImpl;

require_once __DIR__ . "/../service/Todo-svc.php";
require_once __DIR__ . "/../repo/Todo-repo.php";
require_once __DIR__ . "/../entity/Todo.php";



function tesShowTodo(){
    $todoRepo = new TodoRepoImpl();

    $todoSvc = new TodoSvcImpl($todoRepo);

    $todoSvc->showTodo();
}

tesShowTodo();