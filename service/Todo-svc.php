<?php

namespace Service{

    use Repo\TodoRepo;

    interface TodoService{
        function showTodo();
        function addTodo($todo);
        function rmvTodo($num);
    }

    class TodoSvcImpl implements TodoService{

        private TodoRepo $todoRepo;

        public function __construct(TodoRepo $todoRepo)
        {
            $this->todoRepo = $todoRepo;
        }

        function showTodo(){

            echo "TODOLIST \n";

            $todo = $this->todoRepo->getAll();

            foreach($todo as $key => $val){
                echo "$key. $val \n";
            }
        }

        function addTodo($todo){

        }

        function rmvTodo($num){

        }
    }

}