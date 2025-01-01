<div class="form-wrapper">
    <h1>Ajouter un Professeur</h1>
    <form action="index.php?index=professeurs&action=add" method="POST">
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
            <label for="filiere" class="form-label">Departement</label>
             <select name="dep" id="dep" class="form-select">
             <option value="">Sélectionner un departement</option>
                <?php foreach($departement as $dep): ?>
                    <option value="<?= $dep['ID']?>"><?= $dep['Nom'];  ?></option>
                <?php  endforeach?>
            </select> 
        </div>
        
        <div class="form-buttons">
            <button type="submit" class="btn btn-s">Ajouter</button>
            <a href="index.php?index=professeurs" class="btn btn-secondary">Annuler</a>
        </div>
    </form>
</div>
