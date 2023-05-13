<?php

namespace Models\Admin;

class AdminShopModel extends AdminModel {

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

    public function getAddProductDatas() {
        
        $datas = [
            "title"    => "Ajouter un produit",
            "view"     => "Views/admin/shop/add-product.php",
        ];
    
        return $datas;
    }

    public function addProductTreatment( $datas ) {
                
        $sql = ("INSERT INTO products (`id`, `title`, `slug`, `content`, `image`, `date` , `price`) VALUES (NULL, :title, :slug, :content, :image, :date, :price)");
        $product = $this->getPDO()->prepare($sql);
        $product->execute($datas);
    }

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

    public function editProductTreatment( $datas ) {

        $sql = "UPDATE products SET title = :title, slug = :slug, image = :image, content = :content, price = :price WHERE slug = :slug";
        $product = $this->getPDO()->prepare($sql);
        $product->execute($datas);

    }


    public function deleteImageTreatment( $datas ) {

        $sql = "UPDATE products SET image = :image WHERE slug = :slug";
        $product = $this->getPDO()->prepare($sql);
        $product->execute($datas);

    }

}