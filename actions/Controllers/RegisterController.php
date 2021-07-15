<?php 
include_once(__DIR__.'/../Models/users.php');
class RegisterController {
    use validate;
    public static function login() {
       template::view('Login');
    }

    public static function register() {
        template::view('Register');
    }
    public static function get()  {
      $secure = validate::secure($_REQUEST,$rules = [
         'email' => 'email',
         'pass'  => 'text',
      ]);
      $user = users::read($secure['email'],$secure['pass']);
      print_r($user);
    }
    public static function save() {
         $secure = validate::secure($_REQUEST,$rules = [
            'email' => 'email',
            'pass'  => 'text',
            'name'  => 'text'
         ]);
         $validator = validate::rules($secure,$rules = [
            'email' => 'email|unique',
            'pass' => 'min:8|max:20',
            'name'  => 'min:3'
         ]); 
         if(empty($validator)) {
             users::create($secure['email'],$secure['name'],$secure['pass']);
             session::create($secure);
             header('location:/');
         } else {
             header('location:/register');
         }
     }
}