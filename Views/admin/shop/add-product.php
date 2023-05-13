<div id="add-product">
    <h2><?= $datas['title']; ?></h2>
    <form method="post" action="shop&action=add_product_treatment" enctype="multipart/form-data">
        <input type="text" name="add-title" placeholder="Titre"/>
        <input type="text" name="add-slug" placeholder="Slug"/>
        <textarea name="add-content" placeholder="Contenu" rows="10"></textarea>
        <input type="file" name="add-image" accept="image/*"/>
        <input type="text" name="add-price" placeholder="Prix"/>
        <input class="btn btn_secondary" type="submit" value="Ajouter"/>
    </form>
</div>