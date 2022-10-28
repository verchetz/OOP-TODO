<?php


namespace Repo{
    use Entity\Todo;
    interface TodoRepo{
        function save(Todo $todo):void;
        function remove($num):bool;
        function getAll():array;
    }
}