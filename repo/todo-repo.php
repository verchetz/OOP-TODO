<?php


namespace Repo{
    use Entity\Todo;
    interface TodoRepo{
        function save(Todo $todo);
        function remove($num);
        function getAll();
    }

    class TodoRepoImpl implements TodoRepo{

        private $todo = [];

        function save(Todo $todo){

        }

        function remove($num){

        }

        function getAll(){
            return $this->todo;
        }
    }
}