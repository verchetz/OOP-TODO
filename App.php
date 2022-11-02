<?php

require_once __DIR__ . "/entity/Todo.php";
require_once __DIR__ . "/helper/input.php";
require_once __DIR__ . "/repo/Todo-repo.php";
require_once __DIR__ . "/service/Todo-svc.php";
require_once __DIR__ . "/view/todo-view.php";

use Entity\Todo;
use Repo\TodoRepoImpl;
use Service\TodoSvcImpl;
use View\TodoView;

echo "TODO LIST";

$todoRepo = new TodoRepoImpl();
$todoSvc = new TodoSvcImpl($todoRepo);
$todoView = new TodoView($todoSvc);

$todoView->showTodo();