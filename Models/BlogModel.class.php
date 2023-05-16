<?php 

namespace Models;

class BlogModel extends DatabaseModel {

    /**
    * Select all elements form the 'posts' table
    * Set datas of the blog page 
    * @return $datas
    * 
    */

    public function getBlogDatas() {
        $res = $this->getPDO()->query( 'SELECT * FROM posts' );
        $blog = $res->fetchAll();
        
        $datas = [
            "title"    => "Publications",
            "view"     => "Views/blog.php",
            "blog"    => $blog,
        ];

        return $datas;
    }

    /**
    * Select the element in the 'posts' table with the $slug
    * Set datas of the post page 
    * @param string $slug The slug of the post to show
    * @return $datas 
    *
    */

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