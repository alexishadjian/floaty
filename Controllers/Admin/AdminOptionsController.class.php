<?php

namespace Controllers\Admin;

use Models\Admin\AdminOptionsModel;
use Utils\Tools;

class AdminOptionsController {

    private $adminOptionsController;

    public function __construct() {
        $this->adminOptionsController = new AdminOptionsModel();
    }

    public function getAdminOptions() {
        $datas = $this->adminOptionsController->getAdminOptionsDatas();
        require_once('Views/admin/base.html.php');
    }

    public function editSiteTitle() {

        if ( !empty($_POST['edit-title']) ) {

            $value = $_POST['edit-title'];
            $name = 'Site title';
            
            $this->adminOptionsController->editSiteTitleTreatment( $value, $name );
            
            Tools::setMessage("Le titre du site à bien été modifié", '#008000', 'Check');
            header('Location:' . SITE_URL . '/admin/options');
        } else {
            Tools::setMessage("Veuillez remplir le champs", '#FF0000', 'Cross');
            header('Location:' . SITE_URL . '/admin/options');
        }
    }
}