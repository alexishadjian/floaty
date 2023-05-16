<?php

namespace Models\Admin;

class AdminBlogModel extends AdminModel {

    /**
    * Select all elements form the 'posts' table
    * Set datas of the admin blog page 
    * @return $datas
    * 
    */
    
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

    /**
    * Set datas of the add post page 
    * @return $datas
    * 
    */

    public function getAddPostDatas() {

        $datas = [
            "title"    => "Ajouter un article",
            "view"     => "Views/admin/blog/add-post.php",
        ];
    
        return $datas;
    }

    /**
    * Insert $datas in the database
    * Set datas of the add post page 
    * @param string Array of values to insert into the 'posts' table
    * @return $datas
    *
    */

    public function addPostTreatment( $datas ) {

        $sql = ("INSERT INTO posts (`id`, `title`, `slug`, `content`, `image`, `date`) VALUES (NULL, :title, :slug, :content, :image, :date)");
        $post = $this->getPDO()->prepare($sql);
        $post->execute($datas);
    }

    /**
    * Select the element in the 'posts' table with the $slug
    * Set datas of the edit post page 
    * @param string $slug The slug of the post to edit
    * @return $datas 
    *
    */

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

    /**
    * Update $datas in the database
    * @param string Array of values to update into the 'posts' table
    * 
    *
    */

    public function editPostTreatment( $datas ) {

        $sql = "UPDATE posts SET title = :title, slug = :slug, image = :image, content = :content WHERE slug = :slug";
        $post = $this->getPDO()->prepare($sql);
        $post->execute($datas);

    }

    /**
    * Update $datas in the database
    * @param string Array of values to update into the 'posts' table
    * 
    */

    public function deleteImageTreatment( $datas ) {

        $sql = "UPDATE posts SET image = :image WHERE slug = :slug";
        $post = $this->getPDO()->prepare($sql);
        $post->execute($datas);

    }

}