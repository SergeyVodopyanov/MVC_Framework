<?php

ini_set('display_errors', 1);  //вывод ошибок 
error_reporting(E_ALL);  //отчёт о всех ошибках (и notices, и warnings, и errors)

function debug($str)  //функция для дебага (чтобы было более отформатированно)
{
    echo '<pre>';
    var_dump($str);
    echo '<pre>';
    exit;
}
