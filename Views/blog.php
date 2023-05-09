<?php require_once('Views/parts/header-page.php'); ?>

<div class="content">
    <h3><?= $datas["title"] ?></h3>


    <?php foreach ( $datas["blog"] as $post ) : ?>

        <h4><?= $post["title"]; ?></h4>
        <a href="<?= SITE_URL ?>/blog/<?= $post["slug"]; ?>">Lire l'article</a>
        
    <?php endforeach; ?>


</div>