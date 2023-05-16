<?php

namespace Controllers;

class NotfoundController extends MainController {

    /**
    * Set 404 page datas
    * Call the 404 page
    * @param string $msg The msg to show on the 404 page
    */

    public function get404($msg) {
        $datas["title"] = $msg;
        $datas["view"] = 'Views/404.php';
        require_once('Views/base.html.php');
    }
}