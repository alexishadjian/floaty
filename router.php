<?php

use Controllers\MainController;
use Controllers\BlogController;
use Controllers\ShopController;
use Controllers\Admin\AdminController;
use Controllers\Admin\AdminBlogController;
use Controllers\Admin\AdminShopController;
use Controllers\Admin\AdminOptionsController;
use Controllers\NotfoundController;

$MainController = new MainController();
$BlogController = new BlogController();
$ShopController = new ShopController();
$AdminController = new AdminController();
$AdminBlogController = new AdminBlogController();
$AdminShopController = new AdminShopController();
$AdminOptionsController = new AdminOptionsController();
$NotfoundController = new NotfoundController();

if ( empty( $_GET ) ) {
    $MainController->getHomepage();
} else {

    $page_required = '';

    if ( isset( $_GET["url"] ) ) {
        $page_required = $_GET["url"];
        $url = explode('/', $page_required);
    }

    switch ( $url[0] ) {
        case "shop":

            if ( isset($url[1]) ) {
                $ShopController->getProduct($url[1]);
            } else {
                $ShopController->getShop();
            }
            break;
        case "blog":
            
            if ( isset($url[1]) ) {
                $BlogController->getPost($url[1]);
            } else {
                $BlogController->getBlog();
            }

            break;
        case "validation_login":
            $MainController->validateLogin();
            break;
        case "admin":

            if( isset($_SESSION['user']) ) {

                if( isset($url[1]) ) {
                    
                    switch($url[1]) {

                        case "dashboard": 
                            $AdminController->getAdminDashboard();
                            break;
                        case "blog": 
                            $AdminBlogController->getAdminBlog();
                            
                            if( isset($_GET['action']) ) {

                                $action = $_GET['action'];

                                switch( $action )  {
                                    case "delete_post": 
                                        $AdminBlogController->deletePost();
                                        break;
                                    case "add_post_treatment": 
                                        $AdminBlogController->addPostTreatment();
                                        break;
                                    case "edit_post_treatment": 
                                        $AdminBlogController->editPostTreatment();
                                        break;
                                    case "delete_image": 
                                        $AdminBlogController->deleteEditImage();
                                        break;
                                    default:
                                        $AdminBlogController->getAdminBlog();
                                        break;
                                }
                            }
                            break;
                        case "add_post": 
                            $AdminBlogController->getAddPost();
                            break;
                        case "edit_post":
                            $AdminBlogController->getEditPost($_GET['slug']);
                            break;
                        case "shop": 
                            $AdminShopController->getAdminShop();

                            if( isset($_GET['action']) ) {

                                $action = $_GET['action'];

                                switch( $action )  {
                                    case "delete_product": 
                                        $AdminShopController->deleteProduct();
                                        break;
                                    case "add_product_treatment": 
                                        $AdminShopController->addProductTreatment();
                                        break;
                                    case "edit_product_treatment": 
                                        $AdminShopController->editProductTreatment();
                                        break;
                                    case "delete_image": 
                                        $AdminShopController->deleteEditImage();
                                        break;
                                    default:
                                        $AdminBlogController->getAdminBlog();
                                        break;
                                }
                            }

                            break;
                        case "add_product": 
                            $AdminShopController->getAddProduct();
                            break;
                        case "edit_product":
                            $AdminShopController->getEditProduct($_GET['slug']);
                            break;
                        case "options": 
                            $AdminOptionsController->getAdminOptions();

                            if( isset($_GET['action']) ) {

                                $action = $_GET['action'];

                                switch( $action )  {
                                    case "edit_site-title": 
                                        $AdminOptionsController->editSiteTitle();
                                        break;
                                    default:
                                        $AdminOptionsController->getAdminOptions();
                                        break;
                                }
                            }
                            break;
                        case "deconnexion":
                            $AdminController->deconnexion();
                            break;
                        default: 
                            $AdminController->getAdminDashboard();
                            break;
                    }
                }
                else {
                    $AdminController->getAdminDashboard();
                }
            }
            else {
                $MainController->getLoginPage();
            }
            break;
        default:
            $NotfoundController->get404("Erreur d'aiguillage. Page non trouvée !");
            break;
    }
}

?>