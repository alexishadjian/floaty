<?php if ( $datas['product']["image"] ) {
   $image = SITE_URL . '/uploads/' . $datas['product']["image"];
} else {
   $image = SITE_URL . '/public/assets/img/placeholder.jpg';
}; ?>
<?php use Utils\Front; ?>

<section class="header-page">
   <div class="header-page__content">
      <h1 class="header-page__content__title"><?= $datas['product']["title"] ?></h1>
   </div>
</section>

<div id="product" class="wrapper">
   <div class="content">
      <div class="left col3" style="background-image: url('<?= $image ?>');"></div>
      <div class="right col3">
         <h2 class="title"><?= $datas['product']["title"] ?></h2>
         <p class="description"><?= Front::getExcerpt( $datas['product']["content"], 30, '...' ); ?></p>
         <p class="price"><?= $datas['product']["price"] ?> €</p>
         <a class="btn btn_primary" href="#">Réserver</a>
      </div>
   </div>
   <div class="description">
      <h2 class="title">Description</h2>
      <p class="content"><?= $datas['product']["content"] ?></p>
   </div>
</div>