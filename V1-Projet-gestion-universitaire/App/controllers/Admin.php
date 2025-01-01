<?php
include_once '../App/database.php';
require_once '../App/models/Statistiques.php';

function afficherTableauBord() {
    $stats = getStatistiques();
    require_once '../App/views/dashboard/index.php';
}