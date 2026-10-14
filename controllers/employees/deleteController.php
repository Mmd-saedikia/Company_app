<?php
require_once "../../functions/helpers.php";
require_once "../../functions/pdo.php";
if (isset($_GET["id"]) && $_GET["id"] > 0) {
    $id = (int)$_GET["id"];
    $profile = $conn->query("SELECT profile FROM `students` WHERE id=$id")->fetch();
    // dd($profile);
    if ($profile['profile'] !== "default/default.png") {
        // dd($profile['profile']);
        // dd(__DIR__ ."../../public/image/profile/" . $profile['profile']);
        unlink(__DIR__ . "../../../public/image/profile/".$profile['profile']);
    }
    $stm = $conn->prepare("DELETE FROM `students` WHERE id ='$id'");
    $stm->execute();
    Redirct("view/admin/students/");
} else {
    echo "error 401!";
    exit;
}

?>
