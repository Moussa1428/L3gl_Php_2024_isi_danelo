<div class="form-wrapper">
    <h1>Modifier un étudiant</h1>
    
    <?php if (isset($prof)): ?>
        <form action="index.php?index=professeurs&action=update&id=<?php echo $prof['ID']; ?>" method="POST">
            <div class="mb-3">
                <label for="nom" class="form-label">Nom</label>
                <input type="text" class="form-control" id="nom" name="nom" value="<?php echo htmlspecialchars($prof['Nom']); ?>" required>
            </div>
            
            <div class="mb-3">
                <label for="prenom" class="form-label">Prénom</label>
                <input type="text" class="form-control" id="prenom" name="prenom" value="<?php echo htmlspecialchars($prof['Prenom']); ?>" required>
            </div>
            
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo htmlspecialchars($prof['Email']); ?>" required>
            </div>
            
            <div class="mb-3">
            <label for="filiere" class="form-label">Departement</label>
                <select name="dep" id="dep" class="form-select">
                    <?php foreach($departements as $cour): ?>
                        <option value="<?= $cour['ID']; ?>" <?php echo $prof['IdDepartement'] === $cour['ID'] ? 'selected' : ''; ?>>
                            <?php echo htmlspecialchars($cour['Nom']); ?>
                        </option>
                    <?php  endforeach?>
                </select> 
            </div>
            <div class="form-buttons">
                <button type="submit" class="btn btn-primary">Enregistrer</button>
                <a href="index.php?index=professeurs" class="btn btn-secondary">Annuler</a>
            </div>
        </form>
    <?php else: ?>
    <?php endif; ?>
</div>