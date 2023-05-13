<div id="edit-product">
    <h2><?= $datas['title']; ?></h2>

    <form method="post" action="shop&action=edit_product_treatment&id=<?= $datas['product']['id'] ?>" enctype="multipart/form-data">
        <input type="text" name="edit-title" placeholder="Titre" value="<?= $datas['product']['title'] ?>"/>
        <input type="text" name="edit-slug" placeholder="Slug" value="<?= $datas['product']['slug'] ?>"/>
        <textarea name="edit-content" placeholder="Contenu" rows="10"><?= $datas['product']['content'] ?></textarea>
        <?php if ( $datas['product']['image'] ) :?>
            <div class="input-image">
                <div class="image" style="background-image: url('<?= SITE_URL ?>/uploads/<?= $datas['product']['image'] ?>');">
                    <a class="delete-btn" href="shop&action=delete_image&slug=<?= $datas['product']['slug']; ?>">&#10006</a>
                </div>
            </div>
        <?php else : ?>
            <input type="file" name="edit-image" accept="image/*"/>
        <?php endif ?>
        <input type="text" name="edit-price" placeholder="Prix" value="<?= $datas['product']['price'] ?>"/>
        <input class="btn btn_secondary" type="submit" value="Enregistrer"/>
    </form>
    
</div>