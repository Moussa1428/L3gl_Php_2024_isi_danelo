<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Les <?= $_GET['index'] ?></h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <a href="?index=etudiants&action=add" class="btn btn-primary btn-x">
            <i class="bi bi-plus-lg"></i> Ajouter un étudiant
        </a>
    </div>
</div>
<div class="table-responsive">
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Email</th>
                <th>Filiere</th>
                <th>Heures</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
                <?php foreach ($etuddiants as $p) :  ?>
                <tr>
                    <td><?= $p['ID'] ?></td>
                    <td><?= $p['nom'] ?></td>
                    <td><?= $p['prenom'] ?></td>
                    <td><?= $p['email'] ?></td>
                    <td><?= $p['filiere'] ?></td>
                    <td><?= $p['heure'] ?></td>
                    <td>
                        <div class="btn-group btn-group-sm">
                            <a href="index.php?index=etudiants&action=update&id=<?= $p['ID'] ?>"
                                class="btn btn-warning">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <a href="?index=etudiants&action=delete&id=<?= $p['ID'] ?>"
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
