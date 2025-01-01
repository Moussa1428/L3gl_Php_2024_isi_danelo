<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($_GET['index']) ?  $_GET['index']: 'Gestion';    ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="./assets/css/admin.css" rel="stylesheet">
    <link href="./assets/css/forms.css" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <!-- mt-5 apres voir avec email afficher -->
   <nav class="navbar navbar-expand-lg header fixed-top"> 
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <i class="bi bi-building">  CRUD</i>
            </a>
        </div>
    </nav>
    <div class="container-fluid mt-4">
        <div class="row">
            <!-- Sidebar -->
            <nav class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3 sidebar-sticky">
                    <ul class="nav flex-column mt-5">
                        <li class="nav-item">
                            <a class="nav-link <?php echo isset($_GET['page']) && $_GET['page'] === 'dash' ? 'active' : ''; ?>" href="index.php">
                                <i class="bi bi-speedometer2"></i> Tableau de bord
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo !isset($_GET['page'])  ? 'active' : ''; ?>" href="index.php">
                                <i class="bi bi-people"></i> Clients
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo isset($_GET['page']) && $_GET['page'] === 'list' ? 'active' : ''; ?>" href="index.php?controller=rendez&page=list">
                                <i class="bi bi-calendar-date"></i> Rendez-vous
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- Main content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 main-content mt-2">
                <!-- Loading spinner -->
                <!-- <div class="spinner-overlay">
                    <div class="spinner-border text-primary" role="status">
                        <span class="visually-hidden">Chargement...</span>
                    </div>
                </div> -->