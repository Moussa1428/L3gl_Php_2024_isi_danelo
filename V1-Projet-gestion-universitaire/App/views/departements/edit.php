<div class="form-wrapper">
    <h1>Modifier un cours</h1>
    <?php if(isset($dep)):  ?>
        <form action="index.php?index=departements&action=update&id=<?php echo $dep['ID']; ?>" method="POST" >
            <div class="mb-3">
                <label for="titre" class="form-label">Nom Cours</label>
                <input type="text" class="form-control" id="nom" name="nom" value="<?php echo $dep['Nom'] ;?>" required>
            </div>
            <div class="form-buttons">
                <button type="submit" class="btn btn-primary">Enregistrer</button>
                <a href="index.php?index=departements" class="btn btn-secondary">Annuler</a>
            </div>
        </form>
    <?php endif; ?>
</div>