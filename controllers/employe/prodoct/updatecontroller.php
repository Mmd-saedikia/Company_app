<?php
require_once "../../functions/helpers.php";
require_once "../../functions/pdo.php";

if (isset($_GET["id"]) && $_GET["id"] > 0) {
    $id = (int) $_GET["id"];
    $product = $conn->query("SELECT * FROM `product` WHERE id = '$id'")->fetch();
    if (!$product) {
        page404();
    }
} else {
    echo "error 401!";
    exit;
}
if (checkMethod("POST")) {
    $name = $_POST["name"];
    $price = $_POST["price"];
    $category_id = $_POST["category_id"];
    $count = $_POST["count"];
    if ($name && $price && $category_id) {
        if (strlen($name) > 2 && strlen($price) > 2) {
                $query = "UPDATE `product` SET `name`= ? ,`price`=? ,`category_id`= ? , `count`= ? ,`updated_at`=now() WHERE id='$id'";
                $stm = $conn->prepare($query);
                $stm->execute([$name, $price, $category_id]);
                    Redirct("view/employe/prodoct/");
        } else {
            echo "error3";
        }

    } else {
        echo "error4";
    }
} else {
    echo "error5";
}