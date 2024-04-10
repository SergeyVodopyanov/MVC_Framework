<?php

namespace application\core;

class Router
{
    protected $routes = [];
    protected $params = [];

    public function __construct()
    {
        echo 'я класс роутер';
    }

    public function add() //добавление
    {
        //
    }

    public function match() //проверка
    {
        //
    }

    public function run() //запуск 
    {
        echo 'start';
    }

}