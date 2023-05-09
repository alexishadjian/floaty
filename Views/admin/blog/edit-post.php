<div id="edit-post">
    <h2><?= $datas['title']; ?></h2>

    <form method="post" action="blog&action=edit_post_treatment&id=<?= $datas['post']['id'] ?>" enctype="multipart/form-data">
        <input type="text" name="edit-title" placeholder="Titre" value="<?= $datas['post']['title'] ?>"/>
        <input type="text" name="edit-slug" placeholder="Slug" value="<?= $datas['post']['slug'] ?>"/>
        <textarea name="edit-content" placeholder="Contenu" rows="10"><?= $datas['post']['content'] ?></textarea>
        <div class="input-image">
            <div class="image" style="background-image: url('<?= SITE_URL ?>/uploads/<?= $datas['post']['image'] ?>');"></div>
            <span><?= $datas['post']['image'] ?></span>
        </div>
        <input class="btn btn_secondary" type="submit" value="Enregistrer"/>
    </form>
    
</div>