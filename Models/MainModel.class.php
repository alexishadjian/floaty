<?php

namespace Models;


class MainModel {

    public function getHomeDatas() {
        $datas = [
            "title"     => "Bienvenue sur ma page d'accueil",
            "content"   => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Commodi reprehenderit iusto repellendus tempora quae officiis nesciunt vel qui fuga! Enim eius perspiciatis aut est reprehenderit repellendus ipsa aliquid officia eos.",
            "view"      => "Views/homepage.php"
        ];
        return $datas;
    }

    public function getContactDatas() {
        $datas = [
            "title"     => "Contactez-nous !",
            "content"   => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Commodi reprehenderit iusto repellendus tempora quae officiis nesciunt vel qui fuga! Enim eius perspiciatis aut est reprehenderit repellendus ipsa aliquid officia eos.",
            "view"      => "Views/contact.php"
        ];
        return $datas;
    }

}