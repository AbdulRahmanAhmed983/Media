<?php 

class HomeController {
    public static function index() {
        print_r(session_status());
        if(session::get('name')) {
            template::view('Dashboard');
           

        } else {
            header('location:/login');
        }
    }
}