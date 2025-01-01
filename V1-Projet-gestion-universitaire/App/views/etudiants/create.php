<div class="form-wrapper">
    <h1>Ajouter un étudiant</h1>
    <form action="index.php?index=etudiants&action=add" method="POST" onsubmit="return validateForm('formAjoutEtudiant')">
        <input type="hidden" name="csrf_token" value="<?php ?>">
        
        <div class="mb-3">
            <label for="nom" class="form-label">Nom</label>
            <input type="text" class="form-control" id="nom" name="nom" required>
        </div>
        
        <div class="mb-3">
            <label for="prenom" class="form-label">Prénom</label>
            <input type="text" class="form-control" id="prenom" name="prenom" required>
        </div>
        
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        
        <div class="mb-3">
            <label for="filiere" class="form-label">Filière</label>
             <select name="filiere" id="filiere" class="form-control">
                <?php foreach($cours as $cour): ?>
                <option value="<?= $cour['ID']?>"><?= $cour['Nom'];  ?></option>
                <?php  endforeach?>
            </select> 
        </div>
        
        <div class="form-buttons">
            <button type="submit" class="btn btn-s">Ajouter</button>
            <a href="index.php?index=etudiants" class="btn btn-secondary">Annuler</a>
        </div>
    </form>
</div>
