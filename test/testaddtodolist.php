<?php
require_once "../model/todolist.php";
require_once "../controller/addtodolist.php";

addTodoList("ridho");
addTodoList("kania");
addTodoList("yawchi");

var_dump($todolist);
