<?php
require_once "../../functions/helpers.php";
require_once "../../functions/pdo.php";

if (isset($_GET["id"]) && $_GET["id"] > 0) {
    $id = (int) $_GET["id"];
    $employees = $conn->query("SELECT * FROM `employees` WHERE id = '$id'")->fetch();
    if (!$employees) {
        page404();
    }
} else {
    echo "error 401!";
    exit;
}
if (checkMethod("POST")) {
    $firstname = $_POST["firstname"];
    if ($firstname) {
        if (strlen($firstname) > 2 && strlen($lastname) > 2) {
                $query = "UPDATE `employees` SET `firstname`= ?,`updated_at`=now() WHERE id='$id'";
                $stm = $conn->prepare($query);
                $stm->execute([$firstname]);
                    Redirct("view/admin/dashboard/list.php");
        } else {
            echo "error3";
        }

    } else {
        echo "error4";
    }
} else {
    echo "error5";
}