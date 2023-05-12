<?php require_once('Views/parts/header-page.php'); ?>
<?php use Utils\Front; ?>

<div id="blog">
    <div class="post-list wrapper">
        <?php foreach ( $datas["blog"] as $post ) : ?>
            <?php $thumbnail = $post["image"] ?>
            <div class="post">
                <a class="post__link" href="<?= SITE_URL ?>/blog/<?= $post["slug"]; ?>"></a>
                <?php if ( $post["image"] ) : ?>
                    <div class="post__thumbnail" style="background-image: url('<?= SITE_URL ?>/uploads/<?= $post["image"] ?>');"></div>
                <?php else : ?>
                    <div class="post__thumbnail" style="background-image: url('<?= SITE_URL ?>/public/assets/img/placeholder.jpg')"></div>
                <?php endif; ?>
                
                <div class="post__content">
                    <span class="post__content__date"><?= Front::getDate($post["date"]); ?></span>
                    <h4 class="post__content__title"><?= $post["title"]; ?></h4>
                    <p class="post__content__description"><?= Front::getExcerpt( $post["content"], 20, '...' ); ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>