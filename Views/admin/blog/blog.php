<div id="blog">
    <h2><?= $datas['title'] ?></h2>
    <div class="post-list">
        <?php foreach ( $datas["posts"] as $data ) :?>
            <div class="post">
                <a href="<?= SITE_URL ?>/admin/edit_post&slug=<?= $data['slug']; ?>" class="post__link"></a>
                <a href="<?= SITE_URL ?>/admin/edit_post&slug=<?= $data['slug']; ?>" class="post__title"><?= $data['title']; ?></a>
                <div class="post__actions">
                    <a class="edit" href="<?= SITE_URL ?>/admin/edit_post&slug=<?= $data['slug']; ?>">Modifier</a>
                    <a class="delete" href="blog&action=delete_post&slug=<?= $data['slug']; ?>">Supprimer</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <a class="btn btn_secondary" href="<?= SITE_URL ?>/admin/add_post">Ajouter</a>
    <!-- blog&action=add_post -->
</div>