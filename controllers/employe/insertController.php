<?php
require_once "../../functions/helpers.php";
require_once "../../functions/pdo.php";
session_start();
// unlink();
if (checkMethod("POST")) {
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $phone = $_POST["phone"];
    $employee = $_SESSION["employe_id"];
    if ($firstname && $lastname && $phone && $employee) {
        if (strlen($firstname) > 2 && strlen($lastname) > 2) {
                    if ($_FILES["profile"]["tmp_name"]) {
                        $query = "INSERT INTO `users`(`firstname`, `lastname`, `phone` , `employe_id`) VALUES (? , ? , ? , ?)";
                        $stm = $conn->prepare($query);
                        $stm->execute([$firstname, $lastname, $phone, $employee]);
                    } else {
                        $query = "INSERT INTO `users`(`firstname`, `lastname`, `phone` , `employe_id`) VALUES (? , ? , ? , ?)";
                        $stm = $conn->prepare($query);
                        $stm->execute([$firstname, $lastname, $phone , $employee]);

                    }
                    header("Location: http://localhost/company_app/view/employe/dashboard/add-user.php");

        } else {
            echo "error3";
        }

    } else {
        echo "error4";
    }
} else {
    echo "error5";
}



