<?php
session_start();
require_once "../../functions/helpers.php";
require_once "../../functions/pdo.php";

if (isset($_GET["id"]) && $_GET["id"] > 0) {
    $id = (int) $_GET["id"];
    $employees = $conn->query("SELECT * FROM `employees` WHERE id = '$id'")->fetch();
    if (!$employees) {
        page404();
    }
} else {
    echo "error 401!";
    exit;
}
if (checkMethod("POST")) {
    $username = $_POST["username"];

    if ($username) {
        if (strlen($username) > 4) {
            $query = "UPDATE `employees` SET `username`= ?, `updated_at`=now() WHERE id='$id'";
            $stm = $conn->prepare($query);
            $stm->execute([$username]);
            $_SESSION['success'] = "اطلاعات کارمند با موفقیت به‌روزرسانی شد.";
            Redirct("view/admin/dashboard/list.php");
        } else {
            $_SESSION['error'] = "کاراکتر ها باید بیشتر از 4 حرف باشد";
            Redirct("view/admin/dashboard/list.php");
        }
    } else {
        $_SESSION['error'] = "لطفاً همه فیلدها را پر کنید.";
        Redirct("view/admin/dashboard/list.php");
    }
} else {
    echo "error5";
}