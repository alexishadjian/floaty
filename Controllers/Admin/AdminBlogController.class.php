<?php

namespace Controllers\Admin;

use Models\Admin\AdminBlogModel;
use Utils\Security;
use Utils\Tools;

class AdminBlogController extends AdminController {

    private $adminBlogModel;//0

    public function __construct() {
        $this->adminBlogModel = new AdminBlogModel();
    }

    /**
    * Get admin blog page datas
    * Call the admin blog page
    * 
    */

    public function getAdminBlog() {
        $datas = $this->adminBlogModel->getAdminBlogDatas();
        require_once('Views/admin/base.html.php');
    }

    /**
    * Get target post id
    * Delete it from the database
    * 
    */

    public function deletePost() {
        
        $slug = $_GET['slug'];

        $post = $this->adminBlogModel->getPDO()->prepare("DELETE FROM posts WHERE slug = ?");
        $post->execute(array($slug));

        Tools::setMessage("L'article à bien été suprimmé", '#FF0000', 'Cross');
        header('Location:' . SITE_URL . '/admin/blog');
    }

    /**
    * Get "add-post" page datas
    * Call the "add-post" page
    * 
    */

    public function getAddPost() {
        $datas = $this->adminBlogModel->getAddPostDatas();
        require_once('Views/admin/base.html.php');
    }

    /**
    * Check if there is POST datas
    * Send datas to treatment model
    * 
    */

    public function addPostTreatment() {

        if ( !empty($_POST['add-title']) && !empty($_POST['add-slug']) && !empty($_POST['add-content']) ) {

            if ( !Security::slugExists( $_POST['add-slug']) ) {
            
                Tools::imgTreatment('add-image');

                $datas = [
                    'title'     => $_POST['add-title'],
                    'slug'      => $_POST['add-slug'],
                    'content'   => $_POST['add-content'],
                    'image'     => $_FILES['add-image']['name'],
                    'date'      => date('Y-m-d H:i:s'),
                ];
                
                
                
                $this->adminBlogModel->addPostTreatment( $datas );

                Tools::setMessage("L'article à bien été publié", '#008000', 'Check');
                header('Location:' . SITE_URL . '/admin/blog');
            } else {
                Tools::setMessage("Veuillez choisir un slug différent", '#FF0000', 'Cross');
                header('Location:' . SITE_URL . '/admin/blog');
            }

            
        } else {
            Tools::setMessage("Veuillez remplir tous les champs", '#FF0000', 'Cross');
            header('Location:' . SITE_URL . '/admin/blog');
        }
    }

    public function getEditPost( $slug ) {
        $datas = $this->adminBlogModel->getEditPostDatas( $slug );
        require_once('Views/admin/base.html.php');
    }

    public function editPostTreatment() {

        if ( !empty($_POST['edit-title']) && !empty($_POST['edit-slug']) && !empty($_POST['edit-content']) ) {

            if ( !Security::slugExistsEdit( $_GET['id'], $_POST['edit-slug']) ) {

                Tools::imgTreatment('edit-image');
                $datas = [
                    'title'     => $_POST['edit-title'],
                    'slug'      => $_POST['edit-slug'],
                    'content'   => $_POST['edit-content'],
                    'image'     => $_FILES['edit-image']['name'],
                    'date'      => date('Y-m-d H:i:s'),
                ];
                
                
                $this->adminBlogModel->editPostTreatment( $datas );

                Tools::setMessage("L'article à bien été modifié", '#008000', 'Check');
                header('Location:' . SITE_URL . '/admin/blog');

            } else {
                Tools::setMessage("Veuillez choisir un slug différent", '#FF0000', 'Cross');
                header('Location:' . SITE_URL . '/admin/blog');
            }
        } else {
            Tools::setMessage("Veuillez remplir tous les champs", '#FF0000', 'Cross');
            header('Location:' . SITE_URL . '/admin/blog');
        }
    }

    public function deleteEditImage() {

        $datas['post']['image'] = '';

        $datas = [
            'slug'      => $_GET['slug'],
            'image'   => '',
        ];

        $this->adminBlogModel->deleteImageTreatment( $datas );

        header('Location:' . SITE_URL . '/admin/edit_post&slug=' . $_GET['slug']);
    }
}