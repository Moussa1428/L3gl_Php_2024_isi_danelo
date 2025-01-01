
<div class="form-wrapper">
    <h1>Ajouter un Client</h1>
    <form action="index.php?index=cours&action=add" method="POST" >
        <div class="mb-3">
            <label for="titre" class="form-label">Nom Cours</label>
            <input type="text" class="form-control" id="nom" name="nom" required>
        </div>
        
        <div class="mb-3">
            <label for="text" class="form-label">Code</label>
            <input type="text" class="form-control" id="code" name="code" required>
        </div>
        
        <div class="mb-3">
            <label for="time" class="form-label">Heure</label>
            <input type="time" class="form-control" id="heure" name="heure" required>
        </div>

        <div class="mb-3">
            <label for="professeur_id" class="form-label">Professeur</label>
            <select class="form-select" id="professeur_id" name="professeur_id" required>
                <option value="">Sélectionner un professeur</option>
                <?php foreach ($professeurs as $professeur): ?>
                    <option value="<?php echo $professeur['ID']; ?>">
                        <?php echo htmlspecialchars($professeur['Nom'] . ' ' . $professeur['Prenom']); ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-buttons">
            <button type="submit" class="btn btn-primary">Ajouter</button>
            <a href="index.php?index=cours" class="btn btn-secondary">Annuler</a>
        </div>
    </form>
</div>