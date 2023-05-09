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
            
                $inputName = 'add-image';
                
                $time = time();
                $img_name = $_FILES[$inputName]['name'];
                $img_rename = $time.$img_name;
                $img_size = $_FILES[$inputName]['size'];
                $img_tmp_name = $_FILES[$inputName]['tmp_name'];
                $upload_folder = "uploads/";
                $target_file = $upload_folder . basename($img_rename);
                $sizeLimit = 5; // File limit in Mo
    
                // if ($img_size > ($sizeLimit * 100000)) {
                //     echo 'File must be less than ' . $sizeLimit . 'MB.';
                // } else {
                    move_uploaded_file($img_tmp_name, $target_file);
                // }
                $datas = [
                    'title'     => $_POST['add-title'],
                    'slug'      => $_POST['add-slug'],
                    'content'   => $_POST['add-content'],
                    'image'   => $img_rename,
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
                    'image'   => $_FILES['edit-image']['name'],
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
}