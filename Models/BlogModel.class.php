<?php 

namespace Models;

class BlogModel extends DatabaseModel {

    public function getBlogDatas() {
        $res = $this->getPDO()->query( 'SELECT * FROM posts' );
        $blog = $res->fetchAll(); //Transforme le résultat en tableau
        
        $datas = [
            "title"    => "Publications",
            "view"     => "Views/blog.php",
            "blog"    => $blog,
        ];

        return $datas;
    }

    public function getPostDatas($slug) {
        $stmt = $this->getPDO()->prepare("SELECT * FROM posts WHERE slug=?");
        $stmt->execute([$slug]);
        $post = $stmt->fetch();

        $datas = [
            "view"     => "Views/post.php",
            "post"    => $post,
        ];
        return $datas;
    }

}