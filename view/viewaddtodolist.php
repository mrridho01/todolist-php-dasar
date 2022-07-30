<?php
require_once __DIR__ . "/../helper/input.php";
require_once __DIR__ . "/../controller/addtodolist.php";
require_once __DIR__ . "/../controller/showtodolist.php";

function viewAddTodoList()
{
    echo "MENAMBAH TODO" . PHP_EOL;

    showTodoList();

    $todo = input("Todo (x untuk batal) ");

    if ($todo == "x") {
        echo "Batal menambah todo" . PHP_EOL;
    } else {
        addTodoList($todo);
    }
};
