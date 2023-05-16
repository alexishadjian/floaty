<?php 

namespace Models;

class ShopModel extends DatabaseModel {

    /**
    * Select all elements form the 'products' table
    * Set datas of the shop page 
    * @return $datas
    * 
    */

    public function getShopDatas() {
        $res = $this->getPDO()->query( 'SELECT * FROM products' );
        $shop = $res->fetchAll();
        
        $datas = [
            "title"    => "Nos bateaux",
            "view"     => "Views/shop.php",
            "shop"    => $shop,
        ];

        return $datas;
    }

    /**
    * Select the element in the 'products' table with the $slug
    * Set datas of the product page 
    * @param string $slug The slug of the product to show
    * @return $datas
    * 
    */

    public function getProductDatas($slug) {
        $stmt = $this->getPDO()->prepare("SELECT * FROM products WHERE slug=?");
        $stmt->execute([$slug]);
        $product = $stmt->fetch();

        $datas = [
            "view"     => "Views/product.php",
            "product"    => $product,
        ];
        return $datas;
    }

}