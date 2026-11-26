<?php
session_start();
require_once "../../functions/helpers.php";
require_once "../../functions/pdo.php";
if (checkMethod("POST")) {
    $start = $_POST["start"];
    $end = $_POST["end"];
    $date = $_POST["date"];
    $employe = $_SESSION["employe_id"];

    if ($start && $end && $date && $employe) {
        // این دوتا شرط باعث میشه ساعت ورودی و خروجی رو به پنج رقم تبدیل کنه
        if (strlen($start) == 4) {
            $start = "0" . $start;
        }
        if (strlen($end) == 4) {
            $end = "0" . $end;
        }
        if ($start >= "00:01" && $end <= "23:59" && $start < $end) {
            $query = "INSERT INTO `check_times`(`start`, `end`, `date` , `employe_id`) VALUES (? , ? , ? , ?)";
            $stm = $conn->prepare($query);
            $stm->execute([$start, $end, $date, $employe]);
            $_SESSION['success'] = "ساعت کاری با موفقیت ثبت شد.";
            header("Location: http://localhost/company_app/view/employe/dashboard/checktime/index.php");
        } else {
            $_SESSION['error'] = "ساعت نامعتبر است: شروع باید از 00:01 باشد، پایان حداکثر 23:59 و شروع قبل از پایان.";
            header("Location: http://localhost/company_app/view/employe/dashboard/checktime/index.php");
        }
    } else {
        $_SESSION['error'] = "همه فیلدها را پر کنید.";
        header("Location: http://localhost/company_app/view/employe/dashboard/checktime/index.php");
    }
} else {
    echo "درخواست باید از فرم باشد دوباره تلاش کنید";
}