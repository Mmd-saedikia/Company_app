<?php
session_start();
require_once "../../../functions/helpers.php";
require_once "../../../functions/pdo.php";
// unlink();
if (checkMethod("POST")) {
    $name = $_POST["name"];
    $price = $_POST["price"];
    $category_id = $_POST["category_id"];
    $count = $_POST["count"];
    if ($name && $price && $category_id && $count) {
        if (strlen($name) > 2) {
            $query = "INSERT INTO `product`(`name`, `price`, `category_id` , `count`) VALUES (? , ? , ? , ?)";
            $stm = $conn->prepare($query);
            $stm->execute([$name, $price, $category_id , $count]);
            $_SESSION['success'] = "محصول با موفقیت ثبت شد.";
            header("Location: http://localhost/company_app/view/employe/prodoct/");
        } else {
            $_SESSION['error'] = "نام باید بیشتر از ۲ کاراکتر باشند.";
            header("Location: http://localhost/company_app/view/employe/prodoct/");
        }
    } else {
        $_SESSION['error'] = "لطفاً همه فیلدها را پر کنید.";
        header("Location: http://localhost/company_app/view/employe/prodoct/");
    }
} else {
    echo "error5";
}