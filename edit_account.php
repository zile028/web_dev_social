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

}


require "view/edit_account.view.php";
