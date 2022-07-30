<?php
require_once "../model/todolist.php";
require_once "../view/viewremovetodolist.php";
require_once "../view/viewshowtodolist.php";
require_once "../controller/showtodolist.php";
require_once "../controller/addtodolist.php";

addTodoList("ridho");
addTodoList("kania");
addTodoList("yawchi");

viewRemoveTodoList();

viewShowTodoList();
