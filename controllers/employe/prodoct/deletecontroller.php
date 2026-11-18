<?php
require_once "../../functions/helpers.php";
require_once "../../functions/pdo.php";
if (isset($_GET["id"])) {
    $id = (int)$_GET["id"];
    $stm = $conn->prepare("DELETE FROM `product` WHERE id ='$id'");
    $stm->execute();
    Redirct("view/employe/prodoct/");
} else {
    echo "error 401!";
    exit;
}

?>
