<?php require "core/init.php";
$title = "All posts";

$all_posts = $Posts->getAllPosts();


require "view/posts.view.php"
?>