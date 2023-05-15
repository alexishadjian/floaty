<div id="options">
    <h2><?= $datas['title'] ?></h2>
    
    <h3>Titre du site</h3>
    <form method="post" action="options&action=edit_site-title">
        <input type="text" name="edit-title" value="<?= $datas['option'][0]['value'] ?>"/>
        <input class="btn btn_secondary" type="submit" value="Enregistrer"/>
    </form>
</div>