<?php

namespace Models;


class MainModel {

    /**
    * Set datas of the add product page 
    * @return $datas
    * 
    */

    public function getHomeDatas() {
        $datas = [
            "title"     => "Floaty",
            "content"   => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Commodi reprehenderit iusto repellendus tempora quae officiis nesciunt vel qui fuga!",
            "view"      => "Views/homepage.php"
        ];
        return $datas;
    }

}