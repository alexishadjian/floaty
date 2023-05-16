<?php

namespace Controllers;
use Models\BlogModel;

class BlogController extends MainController {
    
    private $blogModel;

    public function __construct() {
        $this->blogModel = new BlogModel();
    }

    /**
    * Get blog page datas
    * Call the blog page
    * 
    */

    public function getBlog() {
        $datas = $this->blogModel->getBlogDatas();
        require_once('Views/base.html.php');
    }

    /**
    * Get post page datas
    * Call the post page
    * @param string $slug The slug of the post to show
    */

    public function getPost($slug) {
        $datas = $this->blogModel->getPostDatas($slug);
        require_once('Views/base.html.php');
    }
}