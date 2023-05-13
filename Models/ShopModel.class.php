<?php 

namespace Models;

class ShopModel extends DatabaseModel {

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