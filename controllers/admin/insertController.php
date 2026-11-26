<?php
session_start();
require_once "../../functions/helpers.php";
require_once "../../functions/pdo.php";

if (checkMethod("POST")) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $confpassword = $_POST["confpassword"];
    if ($username && $password && $confpassword) {
        if (strlen($username) > 2 && strlen($password) > 4) {
            $result = $conn->query("SELECT `username` FROM employees WHERE username= '$username'")->fetchAll();
            if (!$result) {
                $newpassword = password_hash($password, PASSWORD_DEFAULT);
                $query = "INSERT INTO `employees`(`username`, `password`) VALUES (? , ?)";
                $stm = $conn->prepare($query);
                $stm->execute([$username , $newpassword]);
                $_SESSION['success'] = "کارمند جدید با موفقیت ثبت شد.";
                header("Location: http://localhost/company_app/view/admin/dashboard/add-user.php");
            } else {
                $_SESSION['error'] = "این نام کاربری قبلاً ثبت شده است.";
                header("Location: http://localhost/company_app/view/admin/dashboard/add-user.php");
            }
        } else {
            $_SESSION['error'] = "نام کاربری باید بیشتر از ۲ کاراکتر و رمز عبور بیشتر از ۴ کاراکتر باشد.";
            header("Location: http://localhost/company_app/view/admin/dashboard/add-user.php");
        }
    } else {
        $_SESSION['error'] = "لطفاً همه فیلدها را پر کنید.";
        header("Location: http://localhost/company_app/view/admin/dashboard/add-user.php");
    }
} else {
    echo "error4";
}