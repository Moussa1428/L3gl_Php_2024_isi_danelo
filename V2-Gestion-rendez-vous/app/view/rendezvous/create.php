<div class="form-wrapper">
    <h1>Ajouter un Rendez-vous</h1>
<form method="POST" action="?controller=rendez&page=save">
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Date</label>
        <input type="date" class="form-control" id="exampleInputPassword1" required name="date">
    </div>

    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Heure</label>
        <input type="time" class="form-control" id="exampleInputPassword1" required name="heure">
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Description</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required
            name="description">
    </div>

    <div class="mb-3">
    <select class="form-label" name="client" required>
        <option value="">Sélectionnez un client</option>
        <?php foreach ($clients as $client): ?>
            <option value="<?= htmlspecialchars($client['id']); ?>">
                <?= htmlspecialchars($client['nom'].'-----'.$client['id']); ?>
            </option>
        <?php endforeach; ?>
    </select>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>