<?php
session_start();
session_destroy();
require_once "../../functions/helpers.php";
require_once "../../functions/pdo.php";
Redirct("auth/login.php");
exit;
