
<div class="form-wrapper">
    <h1>Ajouter un cours</h1>
    
    <form action="index.php?index=departements&action=add" method="POST" >
        <div class="mb-3">
            <label for="titre" class="form-label">Nom Departement</label>
            <input type="text" class="form-control" id="nom" name="nom" required>
        </div>
        <div class="form-buttons">
            <button type="submit" class="btn btn-primary">Ajouter</button>
            <a href="index.php?index=departements" class="btn btn-secondary">Annuler</a>
        </div>
    </form>
</div>