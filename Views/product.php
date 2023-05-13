<?php if ( $datas['product']["image"] ) {
   $image = SITE_URL . '/uploads/' . $datas['product']["image"];
} else {
   $image = SITE_URL . '/public/assets/img/placeholder.jpg';
}; ?>
<?php use Utils\Front; ?>

<div id="post" class="wrapper">
   <section class="header-post" style="background-image: url('<?= $image ?>');">
      <div class="header-post__content">
         <h1 class="header-post__content__title"><?= $datas['product']["title"] ?></h1>
      </div>
   </section>
   <section class="content-post">
      <span class="content-post__date"><?= Front::getDate( $datas['product']["date"] ); ?></span>
      <p class="content-post__content"><?= $datas['product']["content"] ?></p>
   </section>
</div>