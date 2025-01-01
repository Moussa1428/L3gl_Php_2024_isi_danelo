<div class="form-wrapper">
<h1>Modification</h1>
<form method="POST" action="?controller=rendez&page=update">
    <input type="text" class="form-control" id="rendezvousId" required name="id"
        value="<?= htmlspecialchars($ren['id']); ?>" hidden>

    <div class="mb-3">
        <label for="dateInput" class="form-label">Date</label>
        <input type="date" class="form-control" id="dateInput" required name="date"
            value="<?= htmlspecialchars($ren['date']); ?>">
    </div>

    <div class="mb-3">
        <label for="timeInput" class="form-label">Heure</label>
        <input type="time" class="form-control" id="timeInput" required name="heure"
            value="<?= htmlspecialchars($ren['heure']); ?>">
    </div>

    <div class="mb-3">
        <label for="descriptionInput" class="form-label">Description</label>
        <input type="text" class="form-control" id="descriptionInput" aria-describedby="descriptionHelp" required
            name="description" value="<?= htmlspecialchars($ren['descriptions']); ?>">
    </div>

    <div class="mb-3">
        <label for="clientSelect" class="form-label">Client</label>
        <select name="client" id="clientSelect" required>
            <option value="">Sélectionnez un client</option>
            <?php foreach ($clients as $client): ?>
                <option value="<?= htmlspecialchars($client['id']); ?>" <?= ($client['id'] == $ren['client']) ? 'selected' : ''; ?>>
                    <?= htmlspecialchars($client['nom']); ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Mettre à jour</button>
</form>
</div>