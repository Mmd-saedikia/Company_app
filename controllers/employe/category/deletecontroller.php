<?php
session_start();
require_once "../../../functions/helpers.php";
require_once "../../../functions/pdo.php";
if (isset($_GET["id"])) {
    $id = (int)$_GET["id"];
    $stm = $conn->prepare("DELETE FROM `category` WHERE id ='$id'");
    $stm->execute();
    $_SESSION['success'] = "دسته‌بندی با موفقیت حذف شد.";
    Redirct("view/employe/prodoct/category/");
} else {
    $_SESSION['error'] = "شناسه نامعتبر است!";
    Redirct("view/employe/prodoct/category/");
}