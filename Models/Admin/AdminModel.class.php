<?php

namespace Models\Admin;

use Models\DatabaseModel;

class AdminModel extends DatabaseModel {

    /**
    * Check if params matches with databse entries
    * If it matches return the user
    * @param string $login User input value
    * @param string $password User input value
    * @return $user
    */

    public function checkUser( $login, $password ) {
        $stmt = $this->getPDO()->prepare("SELECT * FROM users WHERE login=? AND pwd=?");
        $stmt->execute([$login, $password]);
        $user = $stmt->fetch();

        return $user;
    }

    /**
    * Set datas of the admin dashboard page 
    * @return $datas
    * 
    */

    public function getAdminDashboardDatas() {
        $datas = [
            "content" => "Back-office",
            "view"    => "Views/admin/dashboard.php"
        ];
        return $datas;
    }
}