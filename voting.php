<?php require "core/init.php";

if (!$User::isLogged()) {
    redirect("login_register.php");
}

switch ($_GET["action"]) {

    case "dislike":
        $Posts->dislike($_GET["post_id"]);
        break;
    case "like":
        $Posts->like($_GET["post_id"]);
        break;
}
redirect("posts.php");


?>