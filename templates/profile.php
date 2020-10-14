<?php $this->title = 'Mon profil'; ?>
<h1>Profil de l'utilisateur</h1>

<?= $this->session->show('update_password'); ?>
<div>
    <h2><?= $this->session->get('pseudo'); ?></h2>
    <p><?= $this->session->get('id'); ?></p>
    <a href="../public/index.php?route=updatePassword">Modifier son mot de passe</a>
    <a href="../public/index.php?route=deleteAccount">Supprimer mon compte</a>
</div>
<br>
<a href="../public/index.php"><button type="button" class="btn btn-info">Retour à l'accueil</button></a>