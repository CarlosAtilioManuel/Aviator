<?php

class AdminController{
    public static function renderLoginPage(){
        include 'Views/Modules/Admin/login.php';
    }

    public static function renderHomePage(){
        include 'Views/Modules/Admin/home.php';
    }
}