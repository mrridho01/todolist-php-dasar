<?php
// show todo list
function showTodoList()
{
    global $todolist;

    echo "TODOLIST" . PHP_EOL;

    foreach ($todolist as $key => $value) {
        echo "$key. $value" . PHP_EOL;
    }
}
