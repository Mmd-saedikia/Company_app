<?php
session_start();
require_once "../../functions/helpers.php";
require_once "../../functions/pdo.php";

if (isset($_GET["id"]) && $_GET["id"] > 0) {
    $id = (int) $_GET["id"];
    $users = $conn->query("SELECT * FROM `users` WHERE id = '$id'")->fetch();
    if (!$users) {
        page404();
    }
} else {
    echo "error 401!";
    exit;
}
if (checkMethod("POST")) {
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $phone = $_POST["phone"];
    if ($firstname && $lastname && $phone) {
        if (strlen($firstname) > 2 && strlen($lastname) > 2) {
            $query = "UPDATE `users` SET `firstname`= ? ,`lastname`=? ,`phone`= ? ,`updated_at`=now() WHERE id='$id'";
            $stm = $conn->prepare($query);
            $stm->execute([$firstname, $lastname, $phone]);
            $_SESSION['success'] = "اطلاعات کارمند با موفقیت به‌روزرسانی شد.";
            Redirct("view/employe/dashboard/list.php");
        } else {
            $_SESSION['error'] = "نام و نام خانوادگی باید بیشتر از ۲ کاراکتر باشند.";
            Redirct("view/employe/dashboard/update.php?id=" . $id);
        }
    } else {
        $_SESSION['error'] = "لطفاً همه فیلدها را پر کنید.";
        Redirct("view/employe/dashboard/update.php?id=" . $id);
    }
} else {
    echo "error5";
}