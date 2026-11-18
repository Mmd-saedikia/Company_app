<?php
require_once "../../functions/helpers.php";
require_once "../../functions/pdo.php";
if (isset($_GET["id"]) && $_GET["id"] > 0) {
    $id = (int)$_GET["id"];
    $users = $conn->query("SELECT status FROM `users` WHERE id=$id")->fetch();
    // dd($users);
    if ($users['status'] == 1) {
        $off = 0;
        $query = "UPDATE `users` SET `status`= ? WHERE id=$id";
        $stm = $conn->prepare($query);
        $stm->execute([$off]);
    } else {
        $on = 1;
        $query = "UPDATE `users` SET `status`= ? WHERE id=$id";
        $stm = $conn->prepare($query);
        $stm->execute([$on]);
    }
    Redirct("view/employe/dashboard/list.php");
} else {
    echo "error 401!";
    exit;
}
