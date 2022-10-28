<?php

namespace Service{

    interface TodoService{
        function showTodo();
        function addTodo($todo):void;
        function rmvTodo($num):void;
    }

}