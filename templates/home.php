<?php $this->title = 'Accueil'; ?>
<img src="img/peche.jpg">
<section class="homeheader ">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center ">
                <h1 class="main-title text-center text-white font-italic">Pêche et astuces</h1>
                <h2 class="text-center text-white font-italic">en tout genre</h2>
            </div>
        </div>
    </div>
<?= $this->session->show('add_article'); ?>
<?= $this->session->show('edit_article'); ?>
<?= $this->session->show('delete_article'); ?>
<?= $this->session->show('add_comment'); ?>
<?= $this->session->show('flag_comment'); ?>
<?= $this->session->show('delete_comment'); ?>
<?= $this->session->show('register'); ?>
<?= $this->session->show('login'); ?>
<?= $this->session->show('logout'); ?>
<?= $this->session->show('delete_account'); ?>
<?php
if ($this->session->get('pseudo')) {
    ?>
    <a href="../public/index.php?route=logout"></a>
    <a href="../public/index.php?route=profile"></a>
    <?php if($this->session->get('role') === 'admin') { ?>
        <a href="../public/index.php?route=administration"></a>
    <?php } ?>
    <a href="../public/index.php?route=addArticle"></a>
    <?php
} else {
    ?>
    <?php
}
?>
<?php
foreach ($articles as $article)
{
    ?>
    <div class=" offset-md-2 col-md-8 offset-sm-1 col-sm-10 mt-3 pb-3 card shadow bg-light mb-3 text-center">
        <h2><a href="../public/index.php?route=article&articleId=<?= htmlspecialchars($article->getId());?>"><?= htmlspecialchars($article->getTitle());?></a></h2>
        <p><?= ($article->getContent());?></p>
        <p><?= htmlspecialchars($article->getAuthor());?></p>
        <p>Créé le : <?= htmlspecialchars($article->getCreatedAt());?></p>
    </div>
    <br>
    <?php
}
?>