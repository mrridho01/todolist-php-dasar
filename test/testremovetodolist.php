<?php
require_once "../model/todolist.php";
require_once "../controller/removetodolist.php";
require_once "../controller/addtodolist.php";
require_once "../controller/showtodolist.php";

addTodoList("ridho");
addTodoList("kania");
addTodoList("abu abu");
addTodoList("putbel");
addTodoList("yawchi");

showTodoList();

removeTodoList(2);

showTodoList();
