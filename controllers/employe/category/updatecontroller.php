<?php
session_start();
require_once "../../../functions/helpers.php";
require_once "../../../functions/pdo.php";

if (isset($_GET["id"]) && $_GET["id"] > 0) {
    $id = (int) $_GET["id"];
    $category = $conn->query("SELECT * FROM `category` WHERE id = '$id'")->fetch();
    if (!$category) {
        page404();
    }
} else {
    echo "error 401!";
    exit;
}
if (checkMethod("POST")) {
    $name = $_POST["name"];
    if ($name) {
        if (strlen($name)) {
            $query = "UPDATE `category` SET `name`= ?,`updated_at`=now() WHERE id='$id'";
            $stm = $conn->prepare($query);
            $stm->execute([$name]);
            $_SESSION['success'] = "نام دسته‌بندی با موفقیت به‌روزرسانی شد.";
            Redirct("view/employe/prodoct/category");
        } else {
            $_SESSION['error'] = "نام دسته‌بندی نامعتبر است.";
            Redirct("view/employe/prodoct/category/update.php?id=" . $id);
        }
    } else {
        $_SESSION['error'] = "لطفاً نام دسته‌بندی را وارد کنید.";
        Redirct("view/employe/prodoct/category/update.php?id=" . $id);
    }
} else {
    echo "error5";
}