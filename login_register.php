<?php
require "core/init.php";
$title = "Login - Register";
$genders = ["Male", "Female"];

if (isset($_POST["register"])) {
    $reg_data["gender"] = $_POST["gender"];
    $reg_data["role"] = "user";
    $reg_err = [];

    if (isset($_POST["first_name"]) && !empty($_POST["first_name"])) {
        $reg_data["first_name"] = $_POST["first_name"];
    } else {
        $reg_err["first_name"] = "Required";
    }

    if (isset($_POST["last_name"]) && !empty($_POST["last_name"])) {
        $reg_data["last_name"] = $_POST["last_name"];
    } else {
        $reg_err["last_name"] = "Required";
    }

    if (isset($_POST["date_birth"]) && !empty($_POST["date_birth"])) {
        $reg_data["date_birth"] = $_POST["date_birth"];
    } else {
        $reg_err["date_birth"] = "Required";
    }

    if (isset($_POST["email"]) && !empty($_POST["email"])) {
        $reg_data["email"] = $_POST["email"];
    } else {
        $reg_err["email"] = "Required";
    }

    if (isset($_POST["password"]) && !empty($_POST["password"])) {
        $reg_data["password"] = $_POST["password"];
    } else {
        $reg_err["password"] = "Required";
    }

    if (!isset($_POST["repeat_password"]) or $_POST["repeat_password"] !== $_POST["password"]) {
        $reg_err["repeat_password"] = "Password is not match";
    }

    if (count($reg_err) === 0) {
        $is_register = $User->register($reg_data);
        if ($is_register["status"]) {
            redirect("my_account.php");
        }
    } else {

    }
}

if (isset($_POST["login"])) {
    $log_err = [];
    if (isset($_POST["email"]) && !empty($_POST["email"])) {
        $log_data["email"] = $_POST["email"];
    } else {
        $log_err["email"] = "Required";
    }

    if (isset($_POST["password"]) && !empty($_POST["password"])) {
        $log_data["password"] = $_POST["password"];
    } else {
        $log_err["password"] = "Required";
    }

    if (count($log_err) === 0) {
        $is_login = $User->login($log_data["email"], $log_data["password"]);
        if ($is_login["status"]) {
            redirect("my_account.php");
        }
    }
}

require "view/login_register.view.php"
?>

