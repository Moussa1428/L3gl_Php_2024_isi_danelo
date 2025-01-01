<div class="form-wrapper">
    <h1>Modifier un étudiant</h1>
    
    <?php if (isset($etudiant)): ?>
        <form action="index.php?index=etudiants&action=update&id=<?php echo $etudiant['ID']; ?>" method="POST">
            <div class="mb-3">
                <label for="nom" class="form-label">Nom</label>
                <input type="text" class="form-control" id="nom" name="nom" value="<?php echo htmlspecialchars($etudiant['Nom']); ?>" required>
            </div>
            
            <div class="mb-3">
                <label for="prenom" class="form-label">Prénom</label>
                <input type="text" class="form-control" id="prenom" name="prenom" value="<?php echo htmlspecialchars($etudiant['Prenom']); ?>" required>
            </div>
            
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo htmlspecialchars($etudiant['Email']); ?>" required>
            </div>
            
            <div class="mb-3">
            <label for="filiere" class="form-label">Filière</label>
                <select name="filiere" id="filiere" class="form-control">
                    <?php foreach($cours as $cour): ?>
                        <option value="<?= $cour['ID']; ?>" <?php echo $etudiant['IdCours'] === $cour['ID'] ? 'selected' : ''; ?>>
                            <?php echo htmlspecialchars($cour['Nom']); ?>
                        </option>
                    <?php  endforeach?>
                </select> 
            </div>
            <div class="form-buttons">
                <button type="submit" class="btn btn-primary">Enregistrer</button>
                <a href="index.php?index=etudiants" class="btn btn-secondary">Annuler</a>
            </div>
        </form>
    <?php else: ?>
        <!-- <div class="alert alert-danger">
            Étudiant non trouvé.
        </div>
        <a href="index.php?index=etudiants" class="btn btn-secondary">Retour à la liste</a> -->
    <?php endif; ?>
</div>