<?php

class MainController{
    public static function renderWelcomePage(){
        include 'Views/Modules/Welcome/body.php';
    }

    public static function renderLoginPage(){
        include 'Views/Modules/Admin/login.php';
    }

    public static function renderHomePage(){
        include 'Views/Modules/Admin/home.php';
    }

    public static function renderAdminHomePage(){
        include 'Views/Modules/Admin/home.php';
    }

    public static function renderLogoutPage(){
        include '';
    }

    public static function renderUserHomePage(){
        include 'Views/Modules/User/Home.php';
    }

    public static function renderPageNotFound(){
        include 'Views/Modules/Pages/Error/404.php';
    }
}
