<?php

namespace Controllers\Admin;

use Models\Admin\AdminShopModel;
use Utils\Security;
use Utils\Tools;

class AdminShopController extends AdminController {

    private $adminShopModel;

    public function __construct() {
        $this->adminShopModel = new AdminShopModel();
    }

    /**
    * Get admin Shop page datas
    * Call the admin Shop page
    * 
    */

    public function getAdminShop() {
        $datas = $this->adminShopModel->getAdminShopDatas();
        require_once('Views/admin/base.html.php');
    }

    /**
    * Get target post id
    * Delete it from the database
    * 
    */

    public function deleteProduct() {
        
        $slug = $_GET['slug'];

        $product = $this->adminShopModel->getPDO()->prepare("DELETE FROM products WHERE slug = ?");
        $product->execute(array($slug));

        Tools::setMessage("Le produit à bien été suprimmé", '#FF0000', 'Cross');
        header('Location:' . SITE_URL . '/admin/shop');
    }

    /**
    * Get "add-product" page datas
    * Call the "add-product" page
    * 
    */

    public function getAddProduct() {
        $datas = $this->adminShopModel->getAddProductDatas();
        require_once('Views/admin/base.html.php');
    }

    /**
    * Check if there is PRODUCT datas
    * Send datas to treatment model
    * 
    */

    public function addProductTreatment() {

        if ( !empty($_POST['add-title']) && !empty($_POST['add-slug']) && !empty($_POST['add-content']) ) {

            if ( !Security::slugExists( $_POST['add-slug']) ) {
            
                Tools::imgTreatment('add-image');

                $datas = [
                    'title'     => $_POST['add-title'],
                    'slug'      => $_POST['add-slug'],
                    'content'   => $_POST['add-content'],
                    'image'     => $_FILES['add-image']['name'],
                    'date'      => date('Y-m-d H:i:s'),
                    'price'     => $_POST['add-price'],
                ];
                
                
                
                $this->adminShopModel->addProductTreatment( $datas );

                Tools::setMessage("Le produit à bien été publié", '#008000', 'Check');
                header('Location:' . SITE_URL . '/admin/shop');
            } else {
                Tools::setMessage("Veuillez choisir un slug différent", '#FF0000', 'Cross');
                header('Location:' . SITE_URL . '/admin/shop');
            }

            
        } else {
            Tools::setMessage("Veuillez remplir tous les champs", '#FF0000', 'Cross');
            header('Location:' . SITE_URL . '/admin/shop');
        }
    }

    public function getEditProduct( $slug ) {
        $datas = $this->adminShopModel->getEditProductDatas( $slug );
        require_once('Views/admin/base.html.php');
    }

    public function editProductTreatment() {

        if ( !empty($_POST['edit-title']) && !empty($_POST['edit-slug']) && !empty($_POST['edit-content']) ) {

            if ( !Security::slugExistsEdit( $_GET['id'], $_POST['edit-slug']) ) {

                Tools::imgTreatment('edit-image');
                $datas = [
                    'title'     => $_POST['edit-title'],
                    'slug'      => $_POST['edit-slug'],
                    'content'   => $_POST['edit-content'],
                    'image'     => $_FILES['edit-image']['name'],
                    'date'      => date('Y-m-d H:i:s'),
                    'price'     => $_POST['edit-price'],
                ];
                
                
                $this->adminShopModel->editProductTreatment( $datas );

                Tools::setMessage("Le produit à bien été modifié", '#008000', 'Check');
                header('Location:' . SITE_URL . '/admin/shop');

            } else {
                Tools::setMessage("Veuillez choisir un slug différent", '#FF0000', 'Cross');
                header('Location:' . SITE_URL . '/admin/shop');
            }
        } else {
            Tools::setMessage("Veuillez remplir tous les champs", '#FF0000', 'Cross');
            header('Location:' . SITE_URL . '/admin/shop');
        }
    }

    public function deleteEditImage() {

        $datas['product']['image'] = '';

        $datas = [
            'slug'      => $_GET['slug'],
            'image'   => '',
        ];

        $this->adminShopModel->deleteImageTreatment( $datas );

        header('Location:' . SITE_URL . '/admin/edit_product&slug=' . $_GET['slug']);
    }
}