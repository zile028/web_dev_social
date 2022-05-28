<?php require "core/init.php";
if (!$User::isLogged()) {
    redirect("login_register.php");
}

$title = "My account";

$user_info = $User->info($_SESSION["id"]);
$user_posts = $Posts->userPosts($_SESSION["id"]);


require "view/my_account.view.php";