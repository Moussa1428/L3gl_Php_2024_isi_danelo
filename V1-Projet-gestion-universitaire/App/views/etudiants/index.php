<?php
include_once '../App/controllers/EtudiantController.php';
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