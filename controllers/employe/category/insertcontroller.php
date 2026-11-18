<?php
require_once "../../functions/helpers.php";
require_once "../../functions/pdo.php";
// session_start();
// unlink();
if (checkMethod("POST")) {
    $name = $_POST["name"];
    if ($name) {
        if (strlen($name) > 2) {
                    $query = "INSERT INTO `category`(`name`) VALUES (?)";
                    $stm = $conn->prepare($query);
                    $stm->execute([$name]);
                    header("Location: http://localhost/company_app/view/employe/prodoct/category/");
        }else {
            echo "error3";
        }

    }else {
        echo "error4";
    }
}else {
    echo "error5";
}



