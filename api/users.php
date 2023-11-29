<?php

include '../back/database.php';
include '../back/MySQL.php';
include '../back/Module.php';
include '../back/Users.php';

$method = $_REQUEST['method'] ?? null;
if($method == 'users'){
    $usersModule = new \modules\Users();
    echo json_encode($usersModule->getUsers(), JSON_PRETTY_PRINT);
}else if($method == 'login'){

}