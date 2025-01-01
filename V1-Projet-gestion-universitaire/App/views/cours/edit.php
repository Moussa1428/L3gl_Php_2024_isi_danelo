
<div class="form-wrapper">
    <h1>Modifier un cours</h1>
    <?php if(isset($cours)):  ?>
        <form action="index.php?index=cours&action=update&id=<?php echo $cours['ID']; ?>" method="POST" >
            <div class="mb-3">
                <label for="titre" class="form-label">Nom Cours</label>
                <input type="text" class="form-control" id="nom" name="nom" value="<?php echo $cours['Nom'] ;?>" required>
            </div>
            
            <div class="mb-3">
                <label for="description" class="form-label">Code</label>
                <input type="text" class="form-control" id="code" name="code" value="<?= $cours['code'] ?>" required>
            </div>
            
            <div class="mb-3">
                <label for="heure" class="form-label">Heure</label>
                <input type="number" class="form-control" id="heure" name="heure" value="<?= $cours['heures'] ?>" required>
            </div>

            <div class="mb-3">
            <label for="filiere" class="form-label">Departement</label>
                <select name="dep" id="dep" class="form-select">
                    <?php foreach($prof as $p): ?>
                        <option value="<?= $p['ID']; ?>" <?php echo $p['ID'] === $cours['IdProfesseur'] ? 'selected' : ''; ?>>
                            <?php echo htmlspecialchars($p['Nom'] . ' ' . $p['Prenom']); ?>
                        </option>
                    <?php  endforeach?>
                </select> 
            </div>
            
            <div class="form-buttons">
                <button type="submit" class="btn btn-primary">Enregistrer</button>
                <a href="index.php?index=cours" class="btn btn-secondary">Annuler</a>
            </div>
        </form>
    <?php endif; ?>
</div>