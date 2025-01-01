<div class="form-wrapper">
    <h1>Ajouter un Client</h1>
    <form method="POST" action="?controller=client&page=save">

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Nom</label>
            <input type="text" class="form-control" id="exampleInputPassword1" required name="nom">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Prenom</label>
            <input type="text" class="form-control" id="exampleInputPassword1" required name="prenom">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required name="email">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Telephone</label>
            <input type="number" class="form-control" id="exampleInputPassword1" required name="telephone">
        </div>
        <div class="form-buttons">
            <button type="submit" class="btn btn-primary">Ajouter</button>
            <a href="index.php" class="btn btn-secondary">Annuler</a>
        </div>
        <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
    </form>
</div>