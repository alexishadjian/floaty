<?php

namespace Models\Admin;

use Models\DatabaseModel;

class AdminOptionsModel extends DatabaseModel {

    public function getAdminOptionsDatas() {

        $res = $this->getPDO()->query( "SELECT * FROM options" );
        $option = $res->fetchAll();

        $datas = [
            "title"    => "Options du site",
            "view"     => "Views/admin/options.php",
            "option"   => $option,
        ];
        return $datas;
    }

    public function editSiteTitleTreatment( $value, $name ) {

        $sql = "UPDATE options SET value =? WHERE name =?";
        $post = $this->getPDO()->prepare($sql);
        $post->execute([$value, $name]);

    }

    public function getOption( $name ) {
        $stmt = $this->getPDO()->prepare("SELECT * FROM options WHERE name=?");
        $stmt->execute([$name]); 
        $option = $stmt->fetch();
        return $option['value'];
    }
}