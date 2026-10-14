<?php
const BASE_URL = "http://localhost/company_app/ ";
// echo BASE_URL."/blog";
function Url($url)
{
    return trim(BASE_URL, " /") . "/" . trim($url, " /");
}

// echo Url("/blog/insert.php");
function Assets($path)
{
    return trim(BASE_URL, " /") . "/public/" . trim($path, " /");
}
// echo Assets("css/style.css");

function Redirct($url)
{
    header("Location: " . trim(BASE_URL, " /") . "/" . trim($url, " /"));
    exit();
}
// Redirct("index.php");

function dd($data)
{
    echo "<pre>";
    var_dump($data);
    exit();
}

// dd($_SERVER);
// echo "hi";


function checkMethod($method)
{
    if ($_SERVER['REQUEST_METHOD'] == $method) {
        return true;
    }
    return false;
}


function page404(){
    include_once $_SERVER['DOCUMENT_ROOT']."/radcomplex/view/404.php";
    exit();
}