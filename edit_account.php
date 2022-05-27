<?php require "core/init.php";
if (!$User::isLogged()) {
    redirect("login_register.php");
}
$title = "Edit account";
if (isset($_GET["id"])) {
    $user_info = $User->info($_GET["id"]);
} elseif ($_SERVER["REQUEST_METHOD"] === "POST") {
    $user_info = $User->info($_POST["id"]);
    $data = [
        "id" => $_POST["id"],
        "first_name" => $_POST["first_name"],
        "last_name" => $_POST["last_name"],
        "email" => $_POST["email"],
        "date_birth" => $_POST["date_birth"],
        "gender" => $_POST["gender"],
    ];


//    $profile = $_FILES["img"];

    $upload = new Upload($_FILES["img"], ["jpeg", "jpg", "png"], 2, Upload::MB);

    if ($upload->haveFaile()) {
        $have_err = $upload->haveError();
        if (!$have_err) {

            if (!file_exists(UPLOAD_DIR)) {
                mkdir(UPLOAD_DIR);
            }

            if (file_exists(UPLOAD_DIR . "/" . $_POST["old_img"])) {
                unlink(UPLOAD_DIR . "/" . $_POST["old_img"]);
            }

            $data["img"] = $upload->uploadFile(UPLOAD_DIR);
            $User->updateData($data);
            redirect("edit_account.php?id=" . $data["id"]);
        }
    } else {
        $data["img"] = $_POST["old_img"];
        $User->updateData($data);
        redirect("edit_account.php?id=" . $data["id"]);
    }

//
//    if (!empty($_FILES["img"]["name"])) {
//        $valid_type = ["jpeg", "jpg", "png"];
//        $valid_size = 2 * MB;
//        $img_name = $profile["name"];
//        $extension = pathinfo(strtolower($img_name), PATHINFO_EXTENSION);
//        $img_size = $profile["size"];
//        $temp_name = $profile["tmp_name"];
//
//        $file_err = [];
//
//        if (!in_array($extension, $valid_type)) {
//            $file_err["err_type"] = "Not valid image type, valid type is " . implode(", ", $valid_type);
//        }
//        if ($img_size > $valid_size) {
//            $file_err["err_size"] = "Not valid image size, valid size is " . $valid_size . "MB";
//        }
//
//        if (!file_exists(UPLOAD_DIR)) {
//            mkdir(UPLOAD_DIR);
//        }
//
//        if (file_exists(UPLOAD_DIR . "/" . $_POST["old_img"])) {
//            unlink(UPLOAD_DIR . "/" . $_POST["old_img"]);
//        }
//
//        if (count($file_err) === 0) {
//            $store_name = time() . "." . $extension;
//            move_uploaded_file($temp_name, UPLOAD_DIR . "/" . $store_name);
//            $data["img"] = $store_name;
//        }
//    } else {
//        $data["img"] = $_POST["old_img"];
//    }
//
//    $User->updateData($data);
//    redirect("edit_account.php?id=" . $data["id"]);

}


require "view/edit_account.view.php";
