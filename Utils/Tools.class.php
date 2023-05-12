<?php

namespace Utils;

class Tools {

    public static function setMessage( $msg, $color, $picto ) {

        $_SESSION['message'] = array(
            'content' => $msg,
            'color' => $color,
            'picto' => $picto
        );
    }

    public static function imgTreatment( $inputName ) {

        if ( !empty($_FILES[$inputName]) ) {

            // $time = time();
            $img_name = $_FILES[$inputName]['name'];
            // $img_rename = $time.$img_name;
            // $img_size = $_FILES[$inputName]['size'];
            $img_tmp_name = $_FILES[$inputName]['tmp_name'];
            $upload_folder = "uploads/";
            $target_file = $upload_folder . basename($img_name);
            $sizeLimit = 5; // File limit in Mo

            // if ($img_size > ($sizeLimit * 100000)) {
            //     echo 'File must be less than ' . $sizeLimit . 'MB.';
            // } else {
                move_uploaded_file($img_tmp_name, $target_file);
            // }
            
        }
    }
}