<?php $this->title = "Nouvel Article"; ?>
<h1>Nouvel article</h1>


<div>
    <?php include('form_article.php'); ?>
    <a href="../public/index.php">Retour à l'accueil</a>
</div>

<?php
$route = isset($post) && $post->get('id') ? 'editArticle&articleId=' . $post->get('id') : 'addArticle';
$submit = $route === 'addArticle' ? 'Envoyer' : 'Mettre à jour';
?>