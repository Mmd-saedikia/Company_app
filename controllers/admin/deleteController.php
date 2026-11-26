<?php
session_start();
require_once "../../functions/helpers.php";
require_once "../../functions/pdo.php";
if (isset($_GET["id"])) {
    $id = (int)$_GET["id"];
    $stm = $conn->prepare("DELETE FROM `employees` WHERE id ='$id'");
    $stm->execute();
    $_SESSION['success'] = "کارمند با موفقیت حذف شد.";
    Redirct("view/employe/dashboard/list.php");
} else {
    $_SESSION['error'] = "شناسه نامعتبر است!";
    Redirct("view/employe/dashboard/list.php");
}