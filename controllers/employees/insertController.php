<?php
require_once "../../functions/helpers.php";
require_once "../../functions/pdo.php";
// unlink();
if (checkMethod("POST")) {
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $ncode = $_POST["ncode"];
    $phone = $_POST["phone"];
    $adress = $_POST["adress"] ?? 'ندارد';
    $filesize = $_FILES["profile"]["size"];
    $profile = time() . $_FILES["profile"]["name"];
    $default = "default/default.png";
    if ($firstname && $lastname && $ncode && $phone && $adress && $profile) {
        if (strlen($firstname) > 2 && strlen($lastname) > 2) {
            $result = $conn->query("SELECT `ncode` FROM students WHERE ncode= '$ncode'")->fetchAll();
            if (!$result) {
                if ($filesize < (2 * 1024 * 1024)) {
                    if ($_FILES["profile"]["tmp_name"]) {
                        $query = "INSERT INTO `students`(`firstname`, `lastname`, `ncode`, `phone`, `adress` , `profile`) VALUES (? , ? , ? , ? , ? , ?)";
                        $stm = $conn->prepare($query);
                        $stm->execute([$firstname, $lastname, $ncode, $phone, $adress, $profile]);
                        move_uploaded_file($_FILES["profile"]["tmp_name"], "../../public/image/profile/" . $profile);
                    } else {
                        $query = "INSERT INTO `students`(`firstname`, `lastname`, `ncode`, `phone`, `adress` , `profile`) VALUES (? , ? , ? , ? , ? , ?)";
                        $stm = $conn->prepare($query);
                        $stm->execute([$firstname, $lastname, $ncode, $phone, $adress, $default]);

                    }
                    header("Location: http://localhost/radcomplex/view/admin/students/create.php");
                } else {
                    echo "error1";
                }
            } else {
                echo "error2";
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



