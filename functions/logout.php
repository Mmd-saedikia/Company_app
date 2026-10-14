<?php
session_start();
require_once "../../functions/helpers.php";
require_once "../../functions/pdo.php";
session_destroy();
Redirct("auth/login.php");
exit;
?>