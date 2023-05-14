<?php require_once('Views/parts/header-page.php'); ?>
<?php use Utils\Front; ?>

<div id="shop">
    <div class="product-list wrapper">
        <?php foreach ( $datas["shop"] as $product ) : ?>
            <?php if ( $product["image"] ) {
                $image = SITE_URL . '/uploads/' . $product["image"];
            } else {
                $image = SITE_URL . '/public/assets/img/shop-placeholder.jpg';
            }; ?>
            <div class="product" style="background-image: url('<?= $image ?>');">
                <a class="product__link" href="<?= SITE_URL ?>/shop/<?= $product["slug"]; ?>"></a>
                <div class="product__content">
                    <h4 class="product__content__title"><?= $product["title"]; ?></h4>
                    <p class="product__content__description"><?= Front::getExcerpt( $product["content"], 20, '...' ); ?></p>
                    <span class="product__content__price"><?= $product["price"]; ?> €</span>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>