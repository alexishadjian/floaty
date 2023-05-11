<div id="edit-post">
    <h2><?= $datas['title']; ?></h2>

    <form method="post" action="blog&action=edit_post_treatment&id=<?= $datas['post']['id'] ?>" enctype="multipart/form-data">
        <input type="text" name="edit-title" placeholder="Titre" value="<?= $datas['post']['title'] ?>"/>
        <input type="text" name="edit-slug" placeholder="Slug" value="<?= $datas['post']['slug'] ?>"/>
        <textarea name="edit-content" placeholder="Contenu" rows="10"><?= $datas['post']['content'] ?></textarea>
        <?php if ( $datas['post']['image'] ) :?>
            <div class="input-image">
                <div class="image" style="background-image: url('<?= SITE_URL ?>/uploads/<?= $datas['post']['image'] ?>');">
                    <a class="delete-btn" href="blog&action=delete_image&slug=<?= $datas['post']['slug']; ?>">&#10006</a>
                </div>
            </div>
        <?php else : ?>
            <input type="file" name="edit-image" accept="image/*"/>
        <?php endif ?>
        
        <input class="btn btn_secondary" type="submit" value="Enregistrer"/>
    </form>
    
</div>