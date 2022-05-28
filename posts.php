<?php require "core/init.php";
$title = "All posts";
if (!$User::isLogged()) {
    redirect("login_register.php");
}

$all_posts = $Posts->getAllPosts();


require "view/posts.view.php"
?>