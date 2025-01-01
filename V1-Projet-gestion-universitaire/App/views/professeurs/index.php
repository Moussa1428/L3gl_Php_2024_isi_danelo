<?php
include_once '../App/controllers/ProfesseursControllers.php';
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