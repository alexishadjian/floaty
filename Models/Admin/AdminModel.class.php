<?php

namespace Models\Admin;

use Models\DatabaseModel;

class AdminModel extends DatabaseModel {

    public function checkUser( $login, $password ) {
        $stmt = $this->getPDO()->prepare("SELECT * FROM users WHERE login=? AND pwd=?");
        $stmt->execute([$login, $password]);
        $user = $stmt->fetch();

        return $user;
    }

    public function getAdminDashboardDatas() {
        $datas = [
            "content" => "Back-office",
            "view"    => "Views/admin/dashboard.php"
        ];
        return $datas;
    }

    public function getAdminOptionsDatas() {
        $datas = [
            "content" => "Back-office",
            "view"    => "Views/admin/options.php"
        ];
        return $datas;
    }
}