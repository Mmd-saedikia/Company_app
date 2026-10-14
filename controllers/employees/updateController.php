<?php
require_once "../../functions/helpers.php";
require_once "../../functions/pdo.php";

if (isset($_GET["id"]) && $_GET["id"] > 0) {
    $id = (int) $_GET["id"];
    $students = $conn->query("SELECT * FROM `students` WHERE id = '$id'")->fetch();
    if (!$students) {
        page404();
    }
} else {
    echo "error 401!";
    exit;
}
if (checkMethod("POST")) {
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $ncode = $_POST["ncode"];
    $phone = $_POST["phone"];
    $adress = $_POST["adress"] ?? 'ندارد';
    $profile = $_FILES["profile"];
    $filesize = $_FILES["profile"]["size"] ?? 0;
    $filename = time() . $_FILES["profile"]["name"];
    $img = $_FILES["profile"]["name"];
    if ($firstname && $lastname && $ncode && $phone && $adress && $profile) {
        if (strlen($firstname) > 2 && strlen($lastname) > 2) {
            if ($filesize < (2 * 1024 * 1024)) {
                if ($img) {
                    $queryimg = ", profile = ?";
                    move_uploaded_file($_FILES["profile"]["tmp_name"], "../../public/image/profile/" . $filename);
                    $exedata = [$firstname, $lastname, $ncode, $phone, $adress, $filename];
                } else {
                    $queryimg = " ";
                    $exedata = [$firstname, $lastname, $ncode, $phone, $adress];
                }
                $query = "UPDATE `students` SET `firstname`= ? ,`lastname`=? ,`ncode`= ?,`phone`= ? , `adress`=? , `updated_at`=now() ".$queryimg. "WHERE id='$id'";
                $stm = $conn->prepare($query);
                $stm->execute($exedata);
                    header("Location: http://localhost/radcomplex/view/admin/students/update.php");
            } else {
                echo "error1";
            }


        } else {
            echo "error3";
        }

    } else {
        echo "error4";
    }
} else {
    echo "error5";
}