<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="mt-4">Les Clients</h1>
  <div class="btn-toolbar mb-2 mb-md-0">
    <a href="?controller=client&page=add" class="btn btn-primary mt-4 btn-x">
      <i class="bi bi-plus-lg"></i> Ajouter un Client
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
        <th>email</th>
        <th>Telephone</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($client as $c) : ?>
        <tr>
          <td scope="row"><?= $c['id'] ?></td>
          <td><?= $c['nom'] ?></td>
          <td><?= $c['prenom'] ?></td>
          <td><?= $c['email'] ?></td>
          <td><?= $c['telephone'] ?></td>
          <td>
            <div class="btn-group btn-group-sm">
              <a href="?controller=client&page=edite&id=<?= $c['id'] ?>"
                class="btn btn-warning">
                <i class="bi bi-pencil"></i>
              </a>
              <a href="?controller=client&page=delete&id=<?= $c['id'] ?>"
                class="btn btn-danger"
                onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet client ?')">
                <i class="bi bi-trash"></i>
              </a>
            </div>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>