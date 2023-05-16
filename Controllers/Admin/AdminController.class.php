<?php

namespace Controllers\Admin;

use Controllers\MainController;
use Models\Admin\AdminModel;
use Utils\Tools;

class AdminController extends MainController {

    private $model;

    public function __construct() {
        $this->model = new AdminModel();
    }

    /**
    * Get admin dashboard page datas
    * Call the admin dahsboard page
    * 
    */

    public function getAdminDashboard() {
        $datas = $this->model->getAdminDashboardDatas();
        require_once('Views/admin/base.html.php');
    }

    /**
    * Unset the user session
    * 
    */

    public function deconnexion() {
        unset($_SESSION['user']);
        Tools::setMessage('Vous êtes déconnecté', '#c0c0c0', 'Info');
        header('Location: '. SITE_URL .'/');
    }
}