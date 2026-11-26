<?php
session_start();
require_once "../../functions/helpers.php";
require_once "../../functions/pdo.php";
if (isset($_GET["id"]) && $_GET["id"] > 0) {
    $id = (int)$_GET["id"];
    $employees = $conn->query("SELECT status FROM `employees` WHERE id=$id")->fetch();
    if ($employees['status'] == 1) {
        $off = 0;
        $query = "UPDATE `employees` SET `status`= ? WHERE id=$id";
        $stm = $conn->prepare($query);
        $stm->execute([$off]);
        $_SESSION['success'] = "وضعیت کاربر به «غیرفعال» تغییر یافت.";
    } else {
        $on = 1;
        $query = "UPDATE `employees` SET `status`= ? WHERE id=$id";
        $stm = $conn->prepare($query);
        $stm->execute([$on]);
        $_SESSION['success'] = "وضعیت کاربر به «فعال» تغییر یافت.";
    }
    Redirct("view/employe/dashboard/list.php");
} else {
    $_SESSION['error'] = "شناسه نامعتبر است!";
    Redirct("view/employe/dashboard/list.php");
}