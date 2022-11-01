<?php


namespace Repo{
    use Entity\Todo;
    interface TodoRepo{
        function save(Todo $todo);
        function remove($num);
        function getAll();
    }

    class TodoRepoImpl implements TodoRepo{

        public $todo = [];

        function save(Todo $todo){
            $nums = count($this->todo) + 1;
            $this->todo[$nums] = $todo;
        }

        function remove($num){

            if($num > count($this->todo)){
                return false;
            }
        
            for($i = $num; $i < count($this->todo); $i++){
                 $this->todo[$i] = $this->todo[$i + 1];
            }
        
            unset($this->todo[count($this->todo)]);
        
            return true;
        }

        function getAll(){
            return $this->todo;
        }
    }

}






















