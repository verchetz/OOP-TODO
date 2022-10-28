<?php

namespace Entity{
    class Todo{
        private $todo;
    
        public function __construct($list = '')
        {
            $this->todo = $list;
        }
    
        public function setTodo($todo)
        {
            $this->todo = $todo;
        }
    
        public function getTodo()
        {
            return $this->todo;
        }
    }
}