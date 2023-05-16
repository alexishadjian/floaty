<?php

namespace Utils;

use Models\DatabaseModel;

class Security {

    protected $dataBaseModel;

    /**
    * Check if string contain HTML
    *
    * @param string $str The content to check
    * @return string
    */

    public static function inputValidation( $str ) {
        return htmlentities( $str );
    }

    /**
    * Check if string is a valid email
    *
    * @param string $str The content to check
    * @return bool
    */

    public static function isEmailValid( $str ) {
        if ( !filter_var( $str, FILTER_VALIDATE_EMAIL ) ) {
            return false;
        }
        return true;
    }

    /**
    * Check if $slug exist in the '$table' table
    *
    * @param string $slug The slug to check
    * @param string $table The table to check into
    * @return bool
    */

    public static function slugExists( $slug, $table ) {
        
        $dataBaseModel = new DatabaseModel();
        
        $stmt = $dataBaseModel->getPDO()->prepare("SELECT * FROM $table WHERE slug=?");
        $stmt->execute([$slug]); 
        $element = $stmt->fetch();
        if ($element) {
            return true;
        } else {
            return false;
        } 
    }

    /**
    * Check if $slug exist in the '$table' table except the current slug
    *
    * @param string $id The id of current edit element
    * @param string $slug The slug to current edit element
    * @param string $table The table to check into
    * @return bool
    */

    public static function slugExistsEdit( $id, $slug, $table ) {

        $dataBaseModel = new DatabaseModel();

        $stmt = $dataBaseModel->getPDO()->prepare("SELECT * FROM $table WHERE slug= :slug AND NOT id= :id");
        $stmt->execute(array(
            "id"     => $id,
            "slug"   => $slug,
        ));
        $element = $stmt->fetch();

        if ($element) {
            return true;
        } else {
            return false;
        }
    }

}