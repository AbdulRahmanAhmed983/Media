<?php 

class session {
    public static function create($request) {
       if(session_status() == PHP_SESSION_NONE) {
           session_start();
       } 
       foreach($request as $key => $value) {
           $_SESSION[$key] = $value;
       }

    }
    public static function get($request) {
        if(session_status() == PHP_SESSION_NONE) {
            session_start();
        } 
        if(!empty($_SESSION[$request])) {
            return $_SESSION[$request];
        } else {
            return 'not set';
        }
    }
}