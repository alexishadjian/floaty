<?php

namespace Controllers;
use Models\BlogModel;

class BlogController extends MainController {
    
    private $blogModel;

    public function __construct() {
        $this->blogModel = new BlogModel();
    }

    public function getBlog() {
        $datas = $this->blogModel->getBlogDatas();
        require_once('Views/base.html.php');
    }

    public function getPost($slug) {
        $datas = $this->blogModel->getPostDatas($slug);
        require_once('Views/base.html.php');
    }
}