<?php

$db_connection = require_once("./Config/Connect.php");

if (isset($db_connection) && $db_connection != null) {
    echo "<script type='text/javascript'>" . 
        "console.log('Everything now is working and up to you by Joining IEHF Company'); " . 
        "</script>";
} else {
    echo "<script type='text/javascript'>" .
        "alert('Ops! Database required. Please create a new database connection or just use and insert the old database to continue and see everything you need working perfectly')" .
        "</script>";
}

include_once './Controllers/MainController.php';

$url = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

switch($url) {
    case "/":
        MainController::renderWelcomePage();
        break;
    case "/admin":
        MainController::renderLoginPage();
        break;
    case "/admin/dashboard":
        MainController::renderAdminHomePage();
        break;
    case "/user":
        MainController::renderUserHomePage();
        break;
    default:
        MainController::renderPageNotFound();
        break;
}
