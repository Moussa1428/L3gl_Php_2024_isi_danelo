<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Les <?= $_GET['index'] ?></h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <a href="?index=cours&action=add" class="btn btn-primary btn-x">
            <i class="bi bi-plus-lg"></i> Ajouter un Cour
        </a>
    </div>
</div>
<div class="table-responsive">
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Cours</th>
                <th>Code</th>
                <th>Heures</th>
                <th>Professeur</th>
                <th>Departement</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
                <?php foreach ($cours as $p) :  ?>
                <tr>
                    <td><?= $p['ID'] ?></td>
                    <td><?= $p['Nom'] ?></td>
                    <td><?= $p['code'] ?></td>
                    <td><?= $p['heures'] ?>  H</td>
                    <td><?= $p['Profnom'] ." ".$p['Profprenom'] ?></td>
                    <td><?= $p['departementnom'] ?></td>
                    <td>
                        <div class="btn-group btn-group-sm">
                            <a href="index.php?index=cours&action=update&id=<?= $p['ID']  ?>"
                                class="btn btn-warning">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <a href="?index=cours&action=delete&id=<?= $p['ID'] ?>"
                                class="btn btn-danger"
                                    onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet étudiant ?')">
                                <i class="bi bi-trash"></i>
                            </a>
                        </div>
                    </td>
                </tr>
                <?php  endforeach ?>
        </tbody>
    </table>
</div>
