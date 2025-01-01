<div class="container py-4">
    <h1 class="mb-4">Tableau de bord</h1>
    
    <div class="row">
        <!-- Carte pour le total des étudiants -->
        <div class="col-md-6 col-lg-3 mb-4">
            <div class="card h-100 border-info">
                <div class="card-body text-center">
                    <h5 class="card-title">Total des étudiants</h5>
                    <p class="display-4"><?php echo $stats['total_etudiants']; ?></p>
                </div>
            </div>
        </div>
        
        <!-- Carte pour le total des cours -->
        <div class="col-md-6 col-lg-3 mb-4">
            <div class="card h-100 border-primary">
                <div class="card-body text-center">
                    <h5 class="card-title">Total des cours</h5>
                    <p class="display-4"><?php echo $stats['total_cours']; ?></p>
                </div>
            </div>
        </div>
        <!-- Carte pour le total des professeurs -->
        <div class="col-md-6 col-lg-3 mb-4">
            <div class="card h-100 border-warning">
                <div class="card-body text-center">
                    <h5 class="card-title">Total des professeurs</h5>
                    <p class="display-4"><?php echo $stats['total_professeurs']; ?></p>
                </div>
            </div>
        </div>
        <!-- Carte pour le total des départements -->
        <div class="col-md-6 col-lg-3 mb-4">
            <div class="card h-100 border-success">
                <div class="card-body text-center">
                    <h5 class="card-title">Total des départements</h5>
                    <p class="display-4"><?php echo $stats['total_departements']; ?></p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Professeurs par département -->
        <div class="col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-header">
                    <h5 class="card-title mb-0">Professeurs par département</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Département</th>
                                    <th class="text-end">Nombre de professeurs</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($stats['profs_par_dept'] as $dept): ?>
                                <tr>
                                    <td><?php echo htmlspecialchars($dept['departement']); ?></td>
                                    <td class="text-end"><?php echo $dept['total_profs']; ?></td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Étudiants par cours -->
        <div class="col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-header">
                    <h5 class="card-title mb-0">Étudiants par cours</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Cours</th>
                                    <th class="text-end">Nombre d'étudiants</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($stats['etudiants_par_cours'] as $cours): ?>
                                <tr>
                                    <td><?php echo htmlspecialchars($cours['cours']); ?></td>
                                    <td class="text-end"><?php echo $cours['total_etudiants']; ?></td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>