<?php require "core/init.php";
if (!$User::isLogged()) {
    redirect("login_register.php");
}

$title = "Add post";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $data = [
        "user_id" => $_SESSION["id"],
        "title" => $_POST["title"],
        "post_text" => $_POST["post_text"],
        "visibility" => $_POST["visibility"],
        "img" => null
    ];

    $upload = new Upload($_FILES["img"], ["jpeg", "jpg", "png"], 5, Upload::MB);

    if ($upload->haveFaile()) {
        $have_err = $upload->haveError();
        if (!$have_err) {

            if (!file_exists(UPLOAD_DIR)) {
                mkdir(UPLOAD_DIR);
            }

            $data["img"] = $upload->uploadFile(UPLOAD_DIR);

        }
    }


    $Posts->addPost($data);
    redirect("posts.php");


//    "img" => $_POST["img"],
}


require "view/add_post.view.php";