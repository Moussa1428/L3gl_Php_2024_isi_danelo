<?php
include_once '../app/view/layout/admin/header.php';
require_once('../app/db.php');
require_once('../app/controller/rendezController.php');
require_once('../app/controller/clientController.php');
$con = new database();
$pdo = $con->getconnection();
require_once('../app/model/rendezModel.php');
$model = new rendezModel();
require_once('../app/model/clientModel.php');
$modelC = new clientModel();

$controller = $_GET['controller']??'client';
switch ($controller) {
    case 'client':
        $ctl = new clientController();
        break;
    case 'rendez':
        $ctl = new rendezController();
        break;
    default:
        throw new Exception("Controller non trouvé");
}
try {
    if (empty($_GET['page'])) {
        $page = 'list';
    } else {
        $path = explode('/', $_GET['page']);
        $page = $path[0];
    }

    switch ($page) {
        case 'list':
            $ctl->index();
            break;
        case 'add':
            $ctl-> pageAdd();
            break;
        case 'save':
            $ctl-> save();
            break;
        case 'delete':
            $ctl-> delete();
            break;
        case 'edite':
            $ctl-> pageEdite();
            break;
        case 'update':
            $ctl-> update();
            break;
        case 'dash':
            break;    
        default:
            throw new Exception("Page non trouvée");
    }
} catch (\Throwable $th) {
    echo "Erreur : " . $th->getMessage();
}

include_once '../app/view/layout/admin/header.php';
?>