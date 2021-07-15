<?php 

class users {
    static function create($email,$username,$password) {
       $password = password_hash($password,PASSWORD_BCRYPT);
       conn::query("insert into users(`userName`,`email`,`password`) values('$username','$email','$password')",false);
    }
    static function read($email,$password) {
       $user = conn::query("select * from users where email='$email'",true);
       print_r($user);
       if(!empty($user)) {
           $password = password_verify($password,$user[0][3]) ?? false;
           if($password) {
               $user = [
                   'email' => $user[0][2],
                   'name'  => $user[0][1]
               ];
               session::create($user);
               header('location:/');
           }
       } else {
           header('location:/login');
       }
    }
    static function update() {

    }
    static function delete() {

    }
}