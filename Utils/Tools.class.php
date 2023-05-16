<?php

namespace Utils;

use Models\DatabaseModel;

class Tools {

    /**
    * Set session with $msg, $color and $picto
    *
    * @param string $msg The message to show 
    * @param string $color The color of the message
    * @param string $picto The picto of the message
    * 
    */

    public static function setMessage( $msg, $color, $picto ) {

        $_SESSION['message'] = array(
            'content' => $msg,
            'color' => $color,
            'picto' => $picto
        );
    }

    /**
    * Check if there are datas in the input
    * Get the data move it in the 'uploads' folder
    * @param string $inputName The name of datas input 
    * 
    */

    public static function imgTreatment( $inputName ) {

        if ( !empty($_FILES[$inputName]) ) {

            $img_name = $_FILES[$inputName]['name'];
            $img_tmp_name = $_FILES[$inputName]['tmp_name'];
            $upload_folder = "uploads/";
            $target_file = $upload_folder . basename($img_name);

            move_uploaded_file($img_tmp_name, $target_file);

        }
    }

    /**
    * Count the number of elements in '$table'
    * @param string $table The table where to count elements
    * @return str
    */

    public static function getItemNumber( $table ) {

        $dataBaseModel = new DatabaseModel();

        $stmt = $dataBaseModel->getPDO()->prepare("SELECT * FROM $table");
        $stmt->execute();
        $items = $stmt->fetchAll();
        $number = 0;

        foreach ( $items as $product ) {
            $number++;
        }

        return $number;
    }
}