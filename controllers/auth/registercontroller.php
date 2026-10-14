<?php
require_once "../../functions/helpers.php";
require_once "../../functions/pdo.php";

if (checkMethod("POST")) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $confpassword = $_POST["confpassword"];
    if ($username && $password && $confpassword) {
        if (strlen($username) > 2 && strlen($password) > 4) {
            $result = $conn->query("SELECT `username` FROM admins WHERE username= '?'")->fetchAll();
            if (!$result) {
                        $newpassword = password_hash($password, PASSWORD_DEFAULT);
                        $query = "INSERT INTO `admins`(`username`, `password`) VALUES (? , ?)";
                        $stm = $conn->prepare($query);
                        $stm->execute([$username , $newpassword]);
                        header("Location: http://localhost/company_app/auth/register.php");
            } else {
                echo "error1";
            }

        } else {
            echo "error2";
        }

    } else {
        echo "error3";
    }
} else {
    echo "error4";
}