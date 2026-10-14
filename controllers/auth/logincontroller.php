<?php
require_once "../../functions/helpers.php";
require_once "../../functions/pdo.php";
session_start();

if (checkMethod("POST")) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    if ($username && $password) {
        if (strlen($username) > 2 && strlen($password) > 4) {
            // $query = $conn->query("SELECT * FROM `admins` WHERE username=$username")->fetch();
            $stmt = $conn->prepare(
                "SELECT * FROM `admins` WHERE `username` = :username"
            );

            $stmt->execute(["username" => $username]);
            $admin = $stmt->fetch();

            if ($admin && password_verify($password, $admin['password'])) {
                $_SESSION['admin'] = $username;
                header("Location: http://localhost/company_app/view/admin/dashboard/");
                exit;
            } elseif ($admin && $admin['role'] == 1) {
                $_SESSION['manager'] = $username;
                header("Location: http://localhost/company_app/view/manager/dashboard/");
                exit;
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
