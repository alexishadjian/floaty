<?php

namespace Utils;

use Models\DatabaseModel;

class Security {

    protected $dataBaseModel;

    public static function inputValidation( $str ) {
        return htmlentities( $str );
    }

    public static function isEmailValid( $str ) {
        if ( !filter_var( $str, FILTER_VALIDATE_EMAIL ) ) {
            return false;
        }
        return true;
    }

    public static function slugExists( $slug ) {
        
        $dataBaseModel = new DatabaseModel();
        
        $stmt = $dataBaseModel->getPDO()->prepare("SELECT * FROM posts WHERE slug=?");
        $stmt->execute([$slug]); 
        $post = $stmt->fetch();
        if ($post) {
            return true;
        } else {
            return false;
        } 
    }

    public static function slugExistsEdit( $id, $slug ) {

        $dataBaseModel = new DatabaseModel();

        $stmt = $dataBaseModel->getPDO()->prepare("SELECT * FROM posts WHERE slug= :slug AND NOT id= :id");
        $stmt->execute(array(
            "id"     => $id,
            "slug"   => $slug,
        ));
        $post = $stmt->fetch();

        if ($post) {
            return true;
        } else {
            return false;
        }
    }

}