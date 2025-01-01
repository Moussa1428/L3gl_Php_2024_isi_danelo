<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="mt-4">Les Rendez-vous</h1>
  <div class="btn-toolbar mb-2 mb-md-0">
    <a href="?controller=rendez&page=add" class="btn btn-primary mt-4 btn-x">
      <i class="bi bi-plus-lg"></i> Ajouter Rendez-vous
    </a>
  </div>
</div>
<div class="table-responsive">
  <table class="table table-striped table-hover">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Date</th>
        <th scope="col">Heure</th>
        <th scope="col">Description</th>
        <th scope="col">Client</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($rend as $r) : ?>
        <tr>
          <td scope="row"><?= $r['id'] ?></td>
          <td><?= $r['date'] ?></td>
          <td><?= $r['heure'] ?></td>
          <td><?= $r['descriptions'] ?></td>
          <td><?= $r['client'] ?></td>
          <td>
            <div class="btn-group btn-group-sm">
              <a href="?controller=rendez&page=edite&id=<?= $r['id'] ?>"
                class="btn btn-warning">
                <i class="bi bi-pencil"></i>
              </a>
              <a href="?controller=rendez&page=delete&id=<?= $r['id'] ?>"
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