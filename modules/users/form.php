<?php
include_once "./libs/utility.php";
include_once "./modules/users/user-model.php"

?>
<h3 class="title">
    <span>Créer un nouvel utilisateur</span>
</h3>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="create f-col">
    <input name="nom" type="text" placeholder="nom" required>
    <input name="prenom" type="text" placeholder="prénom" required>
    <input name="date_de_naissance" type="date" placeholder="âge" class="input" required>
    <input name="email" type="mail" placeholder="mail" class="input" required>
    <input name="mdp" type="password" placeholder="password" class="input" required>
    <select name="genres" required>
        <option value="">Choisisez votre genre.</option>
        <option value="Homme">Homme</option>
        <option value="Femme">Femme</option>
        <option value="Autres">Autres</option>
    </select>
    <input name="loisirs" type="text" placeholder="loisirs" required>
    <input name="ville" type="text" placeholder="ville" required>
    <div class="f-row">
      <input name="create_user" type="submit" value="create user !" class="btn">
    </div>
</form>

<p id="loginBtn" class="btn-sign">login</p>

<?php

 var_dump(isset($_POST["create_user"]));
if (isset($_POST["create_user"])) {
    createUser();
}

?>

