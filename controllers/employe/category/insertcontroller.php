<?php
session_start();
require_once "../../../functions/helpers.php";
require_once "../../../functions/pdo.php";
// unlink();
if (checkMethod("POST")) {
    $name = $_POST["name"];
    if ($name) {
        if (strlen($name) > 2) {
            $query = "INSERT INTO `category`(`name`) VALUES (?)";
            $stm = $conn->prepare($query);
            $stm->execute([$name]);
            $_SESSION['success'] = "دسته‌بندی با موفقیت ثبت شد.";
            header("Location: http://localhost/company_app/view/employe/prodoct/category/");
        } else {
            $_SESSION['error'] = "نام دسته‌بندی باید بیشتر از ۲ کاراکتر باشد.";
            header("Location: http://localhost/company_app/view/employe/prodoct/category/");
        }
    } else {
        $_SESSION['error'] = "لطفاً نام دسته‌بندی را وارد کنید.";
        header("Location: http://localhost/company_app/view/employe/prodoct/category/");
    }
} else {
    echo "error5";
}