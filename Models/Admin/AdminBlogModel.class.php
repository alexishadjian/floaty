<?php

namespace Models\Admin;

class AdminBlogModel extends AdminModel {

    public function getAdminBlogDatas() {
        
        $res = $this->getPDO()->query( 'SELECT * FROM posts' );
        $posts = $res->fetchAll();
        
        $datas = [
            "title"    => "Publications",
            "view"     => "Views/admin/blog/blog.php",
            "posts"    => $posts,
        ];
    
        return $datas;
    }

    public function getAddPostDatas() {
        
        $datas = [
            "title"    => "Ajouter un article",
            "view"     => "Views/admin/blog/add-post.php",
        ];
    
        return $datas;
    }

    public function addPostTreatment( $datas ) {
                
        $sql = ("INSERT INTO posts (`id`, `title`, `slug`, `content`, `image`, `date`) VALUES (NULL, :title, :slug, :content, :image, :date)");
        $post = $this->getPDO()->prepare($sql);
        $post->execute($datas);
    }

    public function getEditPostDatas( $slug ) {
        $stmt = $this->getPDO()->prepare("SELECT * FROM posts WHERE slug=?");
        $stmt->execute([$slug]);
        $post = $stmt->fetch();

        $datas = [
            "title"    => "Modifier l'article",
            "view"     => "Views/admin/blog/edit-post.php",
            "post"     => $post,
        ];
        return $datas;
    }

    public function editPostTreatment( $datas ) {

        $sql = "UPDATE posts SET title = :title, slug = :slug, image = :image, content = :content WHERE slug = :slug";
        $post = $this->getPDO()->prepare($sql);
        $post->execute($datas);

    }

}