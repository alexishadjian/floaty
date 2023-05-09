<?php

namespace Controllers;

use Models\Admin\AdminModel;
use Models\MainModel;
use Utils\Security;
use Utils\Tools;

class MainController {

    private $model;

    public function __construct() {
        $this->model = new MainModel();
    }

    public function getHomepage() {
        $datas = $this->model->getHomeDatas();
        require_once('Views/base.html.php');
    }

    public function getContact() {
        $datas = $this->model->getContactDatas();
        require_once('Views/base.html.php');
    }

    public function getLoginPage() {
        $datas["title"] = 'Se connecter';
        $datas["view"] = 'Views/login.php';
        require_once('Views/base.html.php');
    }

    public function validateLogin() {
        if ( !empty($_POST['login']) && !empty($_POST['password']) ) {

            $login = Security::inputValidation( $_POST['login']);
            $password = Security::inputValidation( $_POST['password']);

            $adminModel = new AdminModel();

            if ( $adminModel->checkUser( $login, $password ) ) {

                $_SESSION['user'] = array(
                    'login' => $login
                );

                Tools::setMessage('Vous êtes connecté', '#008000', 'Check');
                header('Location: '. SITE_URL .'/admin/dashboard');

            } else {
                Tools::setMessage('Identifiant ou mot de passe incorrect', '#FF0000', 'Cross');
                header('Location: '. SITE_URL .'/admin');
            }

        } else {
            Tools::setMessage('Veuillez remplir tous les champs', '#FF0000', 'Cross');
            header('Location: '. SITE_URL .'/admin');
        }
    }

}

?>