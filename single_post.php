<?php require "core/init.php";

$post = $Posts->singlePost($_GET["post_id"]);
$title = $post->title;


require "view/single_post.view.php";