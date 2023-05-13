<?php

namespace Controllers;
use Models\ShopModel;

class ShopController extends MainController {
    
    private $shopModel;

    public function __construct() {
        $this->shopModel = new ShopModel();
    }

    public function getShop() {
        $datas = $this->shopModel->getShopDatas();
        require_once('Views/base.html.php');
    }

    public function getProduct($slug) {
        $datas = $this->shopModel->getProductDatas($slug);
        require_once('Views/base.html.php');
    }
}