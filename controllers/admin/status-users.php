<?php
require_once "../../functions/helpers.php";
require_once "../../functions/pdo.php";
if (isset($_GET["id"]) && $_GET["id"] > 0) {
    $id = (int)$_GET["id"];
    $employees = $conn->query("SELECT status FROM `employees` WHERE id=$id")->fetch();
    // dd($employees);
    if ($employees['status'] == 1) {
        $status1 = 0;
        $query = "UPDATE `employees` SET `status`= ? WHERE id=$id";
        $stm = $conn->prepare($query);
        $stm->execute([$status1]);
    } else {
        $status0 = 1;
        $query = "UPDATE `employees` SET `status`= ? WHERE id=$id";
        $stm = $conn->prepare($query);
        $stm->execute([$status0]);
    }
    Redirct("view/admin/dashboard/list.php");
} else {
    echo "error 401!";
    exit;
}
