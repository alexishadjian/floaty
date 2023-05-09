<?php

namespace Controllers;

class NotfoundController extends MainController {

    public function get404($msg) {
        $datas["title"] = $msg;
        $datas["view"] = 'Views/404.php';
        require_once('Views/base.html.php');
    }
}