<?php $this->title = 'Administration'; ?>
<div class="card shadow bg-light mb-3">
  <h1>Administration</h1>
  <?= $this->session->show('add_article'); ?>
  <?= $this->session->show('edit_article'); ?>
  <?= $this->session->show('delete_article'); ?>
  <?= $this->session->show('unflag_comment'); ?>
  <?= $this->session->show('delete_comment'); ?>
  <?= $this->session->show('delete_user'); ?>
  <h2>Articles</h2>
  <a class="text-uppercase font-weitgh-bold" href="../public/index.php?route=addArticle">Nouvel article</a>
  <table>
    <tr>
      <td>Id</td>
      <td>Titre</td>
      <td>Contenu</td>
      <td>Auteur</td>
      <td>Date</td>
      <td>Actions</td>
    </tr>
    <?php
    foreach ($articles as $article) {
    ?>
      <tr>
        <td><?= ($article->getId()); ?></td>
        <td><a href="../public/index.php?route=article&articleId=<?= htmlspecialchars($article->getId()); ?>"><?= ($article->getTitle()); ?></a></td>
        <td><?= substr(($article->getContent()), 0, 150); ?></td>
        <td><?= ($article->getAuthor()); ?></td>
        <td>Créé le : <?= htmlspecialchars($article->getCreatedAt()); ?></td>
        <td>
          <a href="../public/index.php?route=editArticle&articleId=<?= $article->getId(); ?>"><button type="button" class="btn btn-outline-info">Modifier</button></a>
          <a href="../public/index.php?route=deleteArticle&articleId=<?= $article->getId(); ?>"><button type="button" class="btn btn-danger">Supprimer</button></a>
        </td>
      </tr>
    <?php
    }
    ?>
  </table>

  <h2>Commentaires signalés</h2>
  <table>
    <tr>
      <td>Id</td>
      <td>Pseudo</td>
      <td>Message</td>
      <td>Date</td>
      <td>Actions</td>
    </tr>
    <?php
    foreach ($comments as $comment) {
    ?>
      <tr>
        <td><?= htmlspecialchars($comment->getId()); ?></td>
        <td><?= htmlspecialchars($comment->getPseudo()); ?></td>
        <td><?= substr(htmlspecialchars($comment->getContent()), 0, 150); ?></td>
        <td>Créé le : <?= htmlspecialchars($comment->getCreatedAt()); ?></td>
        <td>
          <a href="../public/index.php?route=unflagComment&commentId=<?= $comment->getId(); ?>">Désignaler le commentaire</a>
          <a href="../public/index.php?route=deleteComment&commentId=<?= $comment->getId(); ?>">Supprimer le commentaire</a>
        </td>
      </tr>
    <?php
    }
    ?>
  </table>

  <h2>Utilisateurs</h2>
  <table>
    <tr>
      <td>Id</td>
      <td>Pseudo</td>
      <td>Date</td>
      <td>Rôle</td>
      <td>Actions</td>
    </tr>
    <?php
    foreach ($users as $user) {
    ?>
      <tr>
        <td><?= htmlspecialchars($user->getId()); ?></td>
        <td><?= htmlspecialchars($user->getPseudo()); ?></td>
        <td>Créé le : <?= htmlspecialchars($user->getCreatedAt()); ?></td>
        <td><?= htmlspecialchars($user->getRole()); ?></td>
        <td>
          <?php
          if ($user->getRole() != 'admin') {
          ?>
            <a href="../public/index.php?route=deleteUser&userId=<?= $user->getId(); ?>">Supprimer</a>
          <?php } else {
          ?>
            Suppression impossible
          <?php
          }
          ?>
        </td>
      </tr>
    <?php
    }
    ?>
  </table>
  <a href="../public/index.php"><button type="button" class="btn btn-info">Retour à l'accueil</button></a>