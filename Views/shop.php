<?php require_once('Views/parts/header-page.php'); ?>
<?php use Utils\Front; ?>

<div id="blog">
    <div class="post-list wrapper">
        <?php foreach ( $datas["shop"] as $product ) : ?>
            <?php $thumbnail = $product["image"] ?>
            <div class="post">
                <a class="post__link" href="<?= SITE_URL ?>/shop/<?= $product["slug"]; ?>"></a>
                <?php if ( $product["image"] ) : ?>
                    <div class="post__thumbnail" style="background-image: url('<?= SITE_URL ?>/uploads/<?= $product["image"] ?>');"></div>
                <?php else : ?>
                    <div class="post__thumbnail" style="background-image: url('<?= SITE_URL ?>/public/assets/img/placeholder.jpg')"></div>
                <?php endif; ?>
                
                <div class="post__content">
                    <span class="post__content__date"><?= Front::getDate($product["date"]); ?></span>
                    <h4 class="post__content__title"><?= $product["title"]; ?></h4>
                    <p class="post__content__description"><?= Front::getExcerpt( $product["content"], 20, '...' ); ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>