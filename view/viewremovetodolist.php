<?php
require_once __DIR__ . "/../helper/input.php";
require_once __DIR__ . "/../controller/removetodolist.php";
require_once __DIR__ . "/../controller/showtodolist.php";

function viewRemoveTodoList()
{
    echo "MENGHAPUS TODO" . PHP_EOL;

    showTodoList();

    $pilihan = input("Hapus Todo (x untuk batal) ");

    if ($pilihan == "x") {
        echo "Batal menghapus todo" . PHP_EOL;
    } else {
        $success = removeTodoList($pilihan);

        if ($success) {
            echo "Sukses menghapus todo nomor $pilihan" . PHP_EOL;
        } else {
            echo "Gagal menghapus todo nomor $pilihan" . PHP_EOL;
        }
    }
};
