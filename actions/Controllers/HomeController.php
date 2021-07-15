<?php 

class HomeController {
    public static function index() {
        if(session::get('name')) {
            template::view('Dashboard');
           

        } else {
            header('location:/login');
        }
    }
}