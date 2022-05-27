<?php

class Posts extends QueryBuilder
{
    public function getAllPosts()
    {
        $sql = "SELECT 
                p.* , u.first_name, u.last_name
                FROM posts as p
                JOIN users as u ON u.id=p.user_id
                WHERE visibility = :visibility OR p.user_id = :user_id
                ";

        $query = $this->db->prepare($sql);
        $query->execute([
                "visibility" => "Public",
                "user_id" => $_SESSION["id"]
            ]
        );
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public function addPost(array $data)
    {
        $sql = "INSERT INTO posts 
                (title, post_text, img, visibility, user_id)
                VALUES (:title, :post_text, :img, :visibility, :user_id)";
        $query = $this->db->prepare($sql);
        $query->execute($data);

    }

    public function singlePost($post_id)
    {
        $sql = "SELECT 
                p.* , u.first_name, u.last_name
                FROM posts as p
                JOIN users as u ON u.id=p.user_id
                WHERE p.id=:post_id
                ";
        $query = $this->db->prepare($sql);
        $query->execute(["post_id" => $post_id]);
        return $query->fetch(PDO::FETCH_OBJ);

    }

    public function like($post_id)
    {
        $post_likes = $this->singlePost($post_id)->likes;
        $post_likes++;
        $sql = "UPDATE posts SET likes = :likes WHERE id = :post_id";
        $query = $this->db->prepare($sql);
        $query->execute(["post_id" => $post_id, "likes" => $post_likes]);
    }

    public function dislike($post_id)
    {
        $post_dislikes = $this->singlePost($post_id)->dislike;
        $post_dislikes++;
        $sql = "UPDATE posts SET dislike = :dislikes WHERE id = :post_id";
        $query = $this->db->prepare($sql);
        $query->execute(["post_id" => $post_id, "dislikes" => $post_dislikes]);
    }
}

$Posts = new Posts($db);

?>