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

    public function getAdminDashboard() {
        $datas = $this->model->getAdminDashboardDatas();
        require_once('Views/admin/base.html.php');
    }

    public function getAdminOptions() {
        $datas = $this->model->getAdminOptionsDatas();
        require_once('Views/admin/base.html.php');
    }

    public function deconnexion() {
        unset($_SESSION['user']);
        Tools::setMessage('Vous êtes déconnecté', '#86a3b4', 'Info');
        header('Location: '. SITE_URL .'/');
    }
}