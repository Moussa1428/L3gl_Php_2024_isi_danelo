<?php include_once '../App/views/layout/admin/header.php';   ?>
<?php
$index = $_GET['index'] ?? 'index';
switch ($index) {
    case 'etudiants':
            require_once '../App/views/etudiants/index.php';
        break;
    case 'professeurs':
        require_once '../App/views/professeurs/index.php';
        break;
    case 'cours':
         require_once '../App/views/cours/index.php';
        break; 
    case 'departements':
        require_once '../App/views/departements/index.php';
        break;      
    default:
        include_once '../App/controllers/Admin.php';
        afficherTableauBord();
        break;
}
?>
<?php include_once '../App/views/layout/admin/header.php'; ?>