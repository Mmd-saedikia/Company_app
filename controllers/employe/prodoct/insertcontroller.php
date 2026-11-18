<?php
require_once "../../functions/helpers.php";
require_once "../../functions/pdo.php";
// session_start();
// unlink();
if (checkMethod("POST")) {
    $name = $_POST["name"];
    $price = $_POST["price"];
    $category_id = $_POST["category_id"];
    $count = $_POST["count"];
    if ($name && $price && $category_id && $count) {
        if (strlen($name) > 2 && strlen($price) > 2) {
                    $query = "INSERT INTO `product`(`name`, `price`, `category_id` , `count`) VALUES (? , ? , ? , ?)";
                    $stm = $conn->prepare($query);
                    $stm->execute([$name, $price, $category_id , $count]);
                    header("Location: http://localhost/company_app/view/employe/dashboard/add-user.php");

        }else {
            echo "error3";
        }

    }else {
        echo "error4";
    }
}else {
    echo "error5";
}



