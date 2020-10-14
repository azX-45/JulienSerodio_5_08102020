<?php $this->title = 'Modifier mot mot de passe'; ?>
<h1>Modification du mot de passe</h1>
<div>
    <p>Le mot de passe de <?= $this->session->get('pseudo'); ?> sera modifié</p>
    <form method="post" action="../public/index.php?route=updatePassword">
        <label for="password">Mot de passe</label><br>
        <input type="password" id="password" name="password"><br>
        <input type="submit" value="Mettre à jour" id="submit" name="submit">
    </form>
</div>
<br>
<a href="../public/index.php"><button type="button" class="btn btn-info">Retour à l'accueil</button></a>