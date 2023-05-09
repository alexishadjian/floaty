<?php

use Controllers\MainController;
use Controllers\BlogController;
use Controllers\Admin\AdminController;
use Controllers\Admin\AdminBlogController;

$MainController = new MainController();
$BlogController = new BlogController();
$AdminController = new AdminController();
$AdminBlogController = new AdminBlogController();


if ( empty( $_GET ) ) {
    $MainController->getHomepage();
} else {

    $page_required = '';

    if ( isset( $_GET["url"] ) ) {
        $page_required = $_GET["url"];
        $url = explode('/', $page_required);
    }

    switch ( $url[0] ) {
        case "contact":
            $MainController->getContact();
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
                        case "options": 
                            $AdminController->getAdminOptions();
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
            $NotfoundController = new Controllers\NotfoundController();
            $NotfoundController->get404("Erreur d'aiguillage. Page non trouvée !");
            break;
    }

}

?>