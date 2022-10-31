<?php

namespace Service{

    use Entity\Todo;
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
                $key += 1;
                echo "$key. " . $val->getTodo() . "\n";
            }
        }

        function addTodo($todo){
            $todolist = new Todo($todo);
            $this->todoRepo->save($todolist);
            echo "Sukses manambahkan todolist \n";
        }

        function rmvTodo($num){

        }
    }

}