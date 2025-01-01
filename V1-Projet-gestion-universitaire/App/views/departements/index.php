<?php
include_once '../App/controllers/DepartementsControllers.php';
$action = $_GET['action'] ?? 'action' ;
if($index){
switch ($action) {
    case 'delete':
        delete();
        break;
    case 'add':
        add();
        break;   
    case 'update':
        update();
        break;        
    default:
        index();
        break;
}
}

?>