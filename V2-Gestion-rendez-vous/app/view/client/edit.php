<div class="form-wrapper">
    <h1>Modification</h1>
    <form method="POST" action="?controller=client&page=update">
        <input type="text" class="form-control" id="exampleInputPassword1" required name="id" value="<?= $cl['id'] ?>" hidden>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Nom</label>
            <input type="text" class="form-control" id="exampleInputPassword1" required name="nom" value="<?= $cl['nom'] ?>">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Prenom</label>
            <input type="text" class="form-control" id="exampleInputPassword1" required name="prenom" value="<?= $cl['prenom'] ?>">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required
                name="email" value="<?= $cl['email'] ?>">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Telephone</label>
            <input type="number" class="form-control" id="exampleInputPassword1" required name="telephone" value="<?= $cl['telephone'] ?>">
        </div>

        <div class="form-buttons">
            <button type="submit" class="btn btn-primary">Enregistrer</button>
            <a href="index.php" class="btn btn-secondary">Annuler</a>
        </div>
        <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
    </form>
</div>