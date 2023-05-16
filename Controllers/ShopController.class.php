<?php

namespace Controllers;
use Models\ShopModel;

class ShopController extends MainController {
    
    private $shopModel;

    public function __construct() {
        $this->shopModel = new ShopModel();
    }

    /**
    * Get shop page datas
    * Call the shop page
    * 
    */

    public function getShop() {
        $datas = $this->shopModel->getShopDatas();
        require_once('Views/base.html.php');
    }

    /**
    * Get product page datas
    * Call the product page
    * @param string $slug The slug of the product to show
    */

    public function getProduct($slug) {
        $datas = $this->shopModel->getProductDatas($slug);
        require_once('Views/base.html.php');
    }
}