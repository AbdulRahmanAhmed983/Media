<?php 

class HomeController {
    public static function index() {
        if(session_status() == PHP_SESSION_NONE) {
            header('location:/login');

        } else {
            template::view('Dashboard');
        }
    }
}