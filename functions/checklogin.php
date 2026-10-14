<?php
session_start();
require_once "./helpers.php";
require_once "./pdo.php";
if (isset($_SESSION['admin'])) {
    # Code ...
}elseif(isset($_SESSION['superadmin'])){
    # Code ...
}elseif (isset($_SESSION['employee'])) {
    # Code ...
}else{
    // اگر هیچ کدوم نبود نتونه بره داخل پنل ادمین (کاربر عادی)
}
?>
