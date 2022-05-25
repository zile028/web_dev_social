<?php

class User extends QueryBuilder
{

    public function register($reg_data)
    {
        $is_exist = $this->isExist($reg_data["email"]);
        if (!$is_exist) {
            $password = $reg_data["password"];
            $reg_data["password"] = password_hash($reg_data["password"], PASSWORD_DEFAULT);
            $sql = "INSERT INTO users (first_name, last_name, email,date_birth,gender, password, role)
                    VALUES (:first_name, :last_name, :email, :date_birth, :gender, :password, :role)";
            $query = $this->db->prepare($sql);
            $query->execute($reg_data);
            if ($query->rowCount() === 1) {
                $this->login($reg_data["email"], $password);
                return ["status" => true, "msg" => "User is registered"];
            }
        } else {
            return ["status" => false, "msg" => "User with this email exist"];
        }

    }

    public function isExist($email)
    {
        $sql = "SELECT * FROM users WHERE email = :email";
        $query = $this->db->prepare($sql);
//        $query->bindParam("email", $email);
        $query->execute(["email" => $email]);
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function login($email, $password)
    {
        $user_data = $this->isExist($email);
        if ($user_data && password_verify($password, $user_data["password"])) {
            $_SESSION["id"] = $user_data["id"];
            $_SESSION["role"] = $user_data["role"];
            $_SESSION["name"] = $user_data["first_name"];
            return ["status" => true, "msg" => "User is logged"];
        } else {
            return ["status" => false, "msg" => "Email and password is not match!"];
        }
    }

    static function isLogged()
    {
        return isset($_SESSION["id"]) && !empty($_SESSION["id"]);
    }

}

$User = new User($db)
?>