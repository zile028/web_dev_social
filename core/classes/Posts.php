<?php

class Posts extends QueryBuilder
{
    public function getAllPosts()
    {
        $sql = "SELECT 
                p.* , u.first_name, u.last_name, SUM(ld.likes) AS likes, SUM(ld.dislike) AS dislike
                FROM posts as p
                JOIN users as u ON u.id=p.user_id
                LEFT JOIN likes_dislike ld on p.id = ld.post_id
                WHERE visibility = :visibility OR p.user_id = :user_id
                GROUP BY p.id
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
        $sql = "INSERT INTO posts (title, post_text, img, visibility, user_id)
                VALUES (:title, :post_text, :img, :visibility, :user_id)";
        $query = $this->db->prepare($sql);
        $query->execute($data);

    }

    public function singlePost($post_id)
    {
        $sql = "SELECT 
                p.* , u.first_name, u.last_name, SUM(ld.likes) AS likes, SUM(ld.dislike) AS dislike
                FROM posts as p
                JOIN users as u ON u.id=p.user_id
                LEFT JOIN likes_dislike ld on p.id = ld.post_id
                WHERE p.id=:post_id AND visibility = :visibility OR p.user_id = :user_id
                ";
        $query = $this->db->prepare($sql);
        $query->execute([
            "post_id" => $post_id,
            "visibility" => "Public",
            "user_id" => $_SESSION["id"]
        ]);
        return $query->fetch(PDO::FETCH_OBJ);

    }

    private function isVoted($user_id, $post_id)
    {
        $sql = "SELECT * FROM likes_dislike WHERE post_id=:post_id AND user_id = :user_id";
        $query = $this->db->prepare($sql);
        $query->execute([
            "user_id" => $user_id,
            "post_id" => $post_id
        ]);
        return $query->fetch(PDO::FETCH_OBJ);
    }

    public function like($post_id)
    {
        $is_voted = $this->isVoted($_SESSION["id"], $post_id);
        $likes = $is_voted->likes;
        $dislike = $is_voted->dislike;

        if ($is_voted) {
            $sql = "UPDATE likes_dislike SET dislike = :dislike, likes=:likes WHERE post_id = :post_id AND user_id = :user_id";
            $likes = $likes === 0 ? 1 : 0;
            $dislike = $likes === 1 ? 0 : $dislike;
        } else {
            $sql = "INSERT INTO likes_dislike (post_id, user_id, dislike, likes) VALUES (:post_id, :user_id, :dislike, :likes)";
            $dislike = 0;
            $likes = 1;
        }
        $query = $this->db->prepare($sql);
        $query->execute(["post_id" => $post_id, "dislike" => $dislike, "likes" => $likes, "user_id" => $_SESSION["id"]]);

    }

    public function dislike($post_id)
    {
        $is_voted = $this->isVoted($_SESSION["id"], $post_id);
        $likes = $is_voted->likes;
        $dislike = $is_voted->dislike;

        if ($is_voted) {
            $sql = "UPDATE likes_dislike SET dislike = :dislike, likes=:likes WHERE post_id = :post_id AND user_id = :user_id";
            $dislike = $dislike === 0 ? 1 : 0;
            $likes = $dislike === 1 ? 0 : $likes;
        } else {
            $sql = "INSERT INTO likes_dislike (post_id, user_id, dislike, likes) VALUES (:post_id, :user_id, :dislike, :likes)";
            $dislike = 1;
            $likes = 0;
        }
        $query = $this->db->prepare($sql);
        $query->execute(["post_id" => $post_id, "dislike" => $dislike, "likes" => $likes, "user_id" => $_SESSION["id"]]);

    }

    public function userPosts($id)
    {
        $sql = "SELECT 
                p.* , u.first_name, u.last_name, SUM(ld.likes) AS likes, SUM(ld.dislike) AS dislike
                FROM posts as p
                JOIN users as u ON u.id=p.user_id
                LEFT JOIN likes_dislike ld ON p.id = ld.post_id
                WHERE p.user_id = :user_id
                GROUP BY p.id";

        $query = $this->db->prepare($sql);
        $query->execute(["user_id" => $id]);
        return $query->fetchAll(PDO::FETCH_OBJ);
    }
}

$Posts = new Posts($db);
