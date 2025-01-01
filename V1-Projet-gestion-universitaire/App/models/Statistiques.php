<?php
function getStatistiques() {
    $conn = getDbConnection();
    $stats = [];
    
      // Nombre total de cours
      $stmt = $conn->query("SELECT COUNT(*) as total FROM cours");
      $stats['total_cours'] = $stmt->fetch(PDO::FETCH_ASSOC)['total'];
    
    // Nombre total de professeurs
    $stmt = $conn->query("SELECT COUNT(*) as total FROM professeurs");
    $stats['total_professeurs'] = $stmt->fetch(PDO::FETCH_ASSOC)['total'];
     
    // Nombre total d'étudiants
     $stmt = $conn->query("SELECT COUNT(*) as total FROM etudiants");
     $stats['total_etudiants'] = $stmt->fetch(PDO::FETCH_ASSOC)['total'];

    // Nombre de professeurs par département
    $stmt = $conn->query("
        SELECT d.Nom as departement, COUNT(p.ID) as total_profs
        FROM departements d
        LEFT JOIN professeurs p ON d.ID = p.IdDepartement
        GROUP BY d.ID, d.Nom
        ORDER BY d.Nom
    ");
    $stats['profs_par_dept'] = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // Nombre d'étudiants par cours
    $stmt = $conn->query("
        SELECT c.Nom as cours, COUNT(e.ID) as total_etudiants
        FROM cours c
        LEFT JOIN etudiants e ON c.ID = e.IdCours
        GROUP BY c.ID, c.Nom
        ORDER BY c.Nom
    ");
    $stats['etudiants_par_cours'] = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // Nombre total de départements
    $stmt = $conn->query("SELECT COUNT(*) as total FROM departements");
    $stats['total_departements'] = $stmt->fetch(PDO::FETCH_ASSOC)['total'];
    
    return $stats;
}