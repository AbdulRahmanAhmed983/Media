<?php

include_once(__DIR__.'/../Models/users.php');
class EditController{
    public static function index(){
        if(session::get('name')){
            $email = session::get('email');

            $user = conn::query("select * from users where email='$email'",true);
            template::view('setting',$user);
        }  else{
            header('location:/login');
        }
    }
    public static function edit(){
    $secure = validate::secure($_REQUEST,$rule=[
        'name' => 'text',
        'pass' => 'text'
    ]);
    $validator = validate::rules($secure,$rules = [
        'pass' => 'min:8|max:20',
        'name'  => 'min:3'
     ]); 
     if(empty($validator)) {
        password_hash($secure['pass'],PASSWORD_BCRYPT);
        $email = session::get('email');
        $pass = $secure['pass'];
        $user = $secure['name'];
        conn::query("update users set password='$pass',userName='$user' where email ='$email'",false);
        session::create($secure);
    } 
    header('location:/edit');

    }

}


?>