<div id="shop">
    <h2><?= $datas['title'] ?></h2>
    <div class="item-list">
        <?php foreach ( $datas["products"] as $data ) :?>
            <div class="item">
                <a href="<?= SITE_URL ?>/admin/edit_product&slug=<?= $data['slug']; ?>" class="item__link"></a>
                <a href="<?= SITE_URL ?>/admin/edit_product&slug=<?= $data['slug']; ?>" class="item__title"><?= $data['title']; ?></a>
                <div class="item__actions">
                    <a class="edit" href="<?= SITE_URL ?>/admin/edit_product&slug=<?= $data['slug']; ?>">Modifier</a>
                    <a class="delete" href="shop&action=delete_product&slug=<?= $data['slug']; ?>">Supprimer</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <a class="btn btn_secondary" href="<?= SITE_URL ?>/admin/add_product">Ajouter</a>
</div>