<?php

namespace Models\Admin;

class AdminShopModel extends AdminModel {

    /**
    * Select all elements form the 'product' table
    * Set datas of the shop page 
    * @return $datas
    * 
    */

    public function getAdminShopDatas() {
        
        $res = $this->getPDO()->query( 'SELECT * FROM products' );
        $products = $res->fetchAll();
        
        $datas = [
            "title"    => "Produits",
            "view"     => "Views/admin/shop/shop.php",
            "products"    => $products,
        ];
    
        return $datas;
    }

    /**
    * Set datas of the add product page 
    * @return $datas
    * 
    */

    public function getAddProductDatas() {
        
        $datas = [
            "title"    => "Ajouter un produit",
            "view"     => "Views/admin/shop/add-product.php",
        ];
    
        return $datas;
    }

    /**
    * Insert $datas in the database
    * Set datas of the add post page 
    * @param string Array of values to inset into the 'posts' table
    * @return $datas 
    *
    */

    public function addProductTreatment( $datas ) {
                
        $sql = ("INSERT INTO products (`id`, `title`, `slug`, `content`, `image`, `date` , `price`) VALUES (NULL, :title, :slug, :content, :image, :date, :price)");
        $product = $this->getPDO()->prepare($sql);
        $product->execute($datas);
    }

    /**
    * Select the element in the 'products' table with the $slug
    * Set datas of the edit product page 
    * @param string $slug The slug of the product to edit
    * @return $datas 
    *
    */

    public function getEditProductDatas( $slug ) {
        $stmt = $this->getPDO()->prepare("SELECT * FROM products WHERE slug=?");
        $stmt->execute([$slug]);
        $product = $stmt->fetch();

        $datas = [
            "title"    => "Modifier le produit",
            "view"     => "Views/admin/shop/edit-product.php",
            "product"     => $product,
        ];
        return $datas;
    }

    /**
    * Update $datas in the database
    * @param string Array of values to update into the 'products' table
    *
    */

    public function editProductTreatment( $datas ) {

        $sql = "UPDATE products SET title = :title, slug = :slug, image = :image, content = :content, price = :price WHERE slug = :slug";
        $product = $this->getPDO()->prepare($sql);
        $product->execute($datas);

    }

    /**
    * Update $datas in the database
    * @param string Array of values to update into the 'products' table
    * 
    */

    public function deleteImageTreatment( $datas ) {

        $sql = "UPDATE products SET image = :image WHERE slug = :slug";
        $product = $this->getPDO()->prepare($sql);
        $product->execute($datas);

    }

}