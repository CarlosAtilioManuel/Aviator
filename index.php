<?php

include './Controllers/MainController.php';

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
