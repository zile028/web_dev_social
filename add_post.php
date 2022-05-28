<?php require "core/init.php";
if (!$User::isLogged()) {
    redirect("login_register.php");
}

$title = "Add post";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $post_err = [];

    $post_data = [
        "user_id" => $_SESSION["id"],
        "visibility" => $_POST["visibility"],
        "img" => null
    ];

    if (isset($_POST["title"]) && !empty($_POST["title"])) {
        $post_data["title"] = $_POST["title"];
    } else {
        $post_err["title"] = "Required";
    }

    if (isset($_POST["post_text"]) && !empty($_POST["post_text"])) {
        $post_data["post_text"] = $_POST["post_text"];
    } else {
        $post_err["post_text"] = "Required";
    }

    $upload = new Upload($_FILES["img"], ["jpeg", "jpg", "png"], 5, Upload::MB);

    if ($upload->haveFaile()) {
        $have_err = $upload->haveError();
        if (!$have_err) {
            if (!file_exists(UPLOAD_DIR)) {
                mkdir(UPLOAD_DIR);
            }
            $post_data["img"] = $upload->uploadFile(UPLOAD_DIR);
        }

    }

    if (count($post_err) === 0 && !$upload::$have_error) {
        $Posts->addPost($post_data);
        redirect("posts.php");
    }

}


require "view/add_post.view.php";