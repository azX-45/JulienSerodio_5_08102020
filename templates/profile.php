<?php $this->title = 'Mon profil'; ?>
<div class="card shadow bg-light mb-3 text-center">
<h1>Profil de l'utilisateur</h1>

<?= $this->session->show('update_password'); ?>
<div>
    <h2><?= $this->session->get('pseudo'); ?></h2>
    <a href="../public/index.php?route=updatePassword"><a href="../index.php"><button type="button" class="btn btn-outline-info">Modifier mon mot de passe</button></a>
    <a href="../public/index.php?route=deleteAccount"><button type="button" class="btn btn-outline-info">Supprimer mon compte</button></a>
</div>
<br>
<a href="../public/index.php"><button type="button" class="btn btn-info">Retour à l'accueil</button></a>