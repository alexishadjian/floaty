<?php use Utils\Front; ?>

<div id="homepage">
    <section id="hero">
        <div class="content wrapper">
            <h1 class="content__title"><?= $datas["title"] ?></h1>
            <p class="content__description"><?= $datas["content"] ?></p>
        </div>
        <a id="scroll-btn" href="<?= SITE_URL ?>/#presentation">
            <span></span>
            <span></span>
            <span></span>
        </a>
    </section>

    <section id="presentation">
        <div class="wrapper">
            <div class="left">
                <div class="big-img" style="background-image: url('public/assets/img/yatch.jpg');">
                    <div class="small-img" style="background-image: url('public/assets/img/yatch2.jpg');"></div>
                </div>
            </div>
            <div class="right">
                <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Labore consequatur officia molestias harum nisi aspernatur non dolore adipisci doloribus quisquam quidem vitae animi possimus sequi quod pariatur at, voluptatem sapiente.</p>
                <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Labore consequatur officia molestias harum nisi aspernatur non dolore adipisci doloribus quisquam quidem vitae animi possimus sequi quod pariatur at, voluptatem sapiente.</p>
            </div>
        </div>
        

    </section>

    <section id="shop">
        <?php
            use Models\ShopModel;
            $shopModel = new ShopModel();
            $datas = $shopModel->getShopDatas();
        ?>
        <div class="wrapper">
            <h2 class="sec-title">Nos bateaux à vendre</h2>
            <p class="sec-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, consequatur incidunt, dolorem quod, eum nobis soluta doloremque consequuntur ducimus nam possimus inventore neque magni doloribus cumque eveniet? Modi, soluta autem!</p>
            <div class="product-list">
                <?php foreach ( array_slice($datas["shop"], 0, 2) as $product ) : ?>
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
            <div class="btn-container">
                <a class="btn btn_primary" href="<?= SITE_URL ?>/shop">Voir plus</a>
            </div>
        </div>
    </section>

    <section id="blog">
        <?php
            use Models\BlogModel;
            $blogModel = new BlogModel();
            $datas = $blogModel->getBlogDatas();
        ?>
        <div class="wrapper">
            <h2 class="sec-title">Nos actualités</h2>
            <p class="sec-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, consequatur incidunt, dolorem quod, eum nobis soluta doloremque consequuntur ducimus nam possimus inventore neque magni doloribus cumque eveniet? Modi, soluta autem!</p>
            <div class="post-list">
                <?php foreach ( array_slice($datas["blog"], 0, 3) as $post ) : ?>
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
            <div class="btn-container">
                <a class="btn btn_primary" href="<?= SITE_URL ?>/blog">Voir plus</a>
            </div>
        </div>
    </section>
</div>
