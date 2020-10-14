<?php $this->title = "Connexion"; ?>


<?= $this->session->show('error_login'); ?>
<div class="card shadow bg-light mb-3 text-center">
<h1>Espace de connexion</h1>
    <form method="post" action="../public/index.php?route=login">
        <label for="pseudo">Pseudo</label><br>
        <input type="text" id="pseudo" name="pseudo" value="<?= isset($post) ? htmlspecialchars($post->get('pseudo')): ''; ?>"><br>
        <label for="password">Mot de passe</label><br>
        <input type="password" id="password" name="password"><br>
        <input type="submit" value="Connexion" id="submit" name="submit">
    </form>
    <a href="../public/index.php"><button type="button" class="btn btn-info">Retour à l'accueil</button></a>
</div>