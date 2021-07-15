<?php 

class HomeController {
    public static function index() {
        if(session_status() == PHP_SESSION_NONE) {
            template::view('Dashboard');
        } else {
            header('location:/login');
        }
    }
}