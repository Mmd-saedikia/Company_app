
<?php
session_start();
require_once "../../functions/helpers.php";
require_once "../../functions/pdo.php";

if (checkMethod("POST")) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username && $password) {
        if (strlen($username) > 2 && strlen($password) > 4) {
            $stmt = $conn->prepare("SELECT * FROM `employees` WHERE `username` = ?");
            $stmt->execute([$username]);
            $employe = $stmt->fetch();
            if ($employe && password_verify($password, $employe["password"])) {
                $_SESSION["employe"] = $username;
                $_SESSION["employe_id"] = $employe["id"];
                header("Location: http://localhost/company_app/view/employe/dashboard/");
                exit;
            } else {
                echo "نام کاربری یا رمز عبور اشتباه است.";
            }
        } else {
            echo "نام کاربری یا رمز عبور خیلی کوتاه است.";
        }
    } else {
        echo "نام کاربری و رمز عبور را وارد کنید.";
    }
} else {
    echo "درخواست نامعتبر است.";
}