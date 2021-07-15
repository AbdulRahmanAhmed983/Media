<?php 
class template {
    public static function setaction($file) {
       return include realpath("actions/$file.php");
    } 
    public static function view($file) {
        return include(realpath("views/$file.php"));
    }
    public static function Controller($controller) {
        return include(realpath("actions/Controllers/$controller.php"));
    }
}
class Auth {
    public function login() {

    }
    public static function  valid($valid = [],$payload) {
        $error = array(
            'max' => 'You must enter at max',
            'min' => 'You at least need',
            'email' => 'Not valid email',
            'unique' => 'Not unique value'
        );
        $values = explode('|',$valid);
        $rules  = [];
        $success = [];
        foreach($values as $value) {
            $rule = explode(':',$value);
            array_push($rules,$rule);
        }

        if(isset($rules)) {
            foreach($rules as $rule) {
                 array_push($success,self::rules($rule,$payload,$value)); 
            }
            return $success;
        }
    }

}
trait validate {
    public static function rules($request,$rules) {
        $validation = [];
        foreach($request as $key => $value) {
            $getRule =$rules[$key];
            $ruleExplode = explode('|',$getRule);
            if(array_key_exists($key,$rules))  {
                $getRule =$rules[$key];
                $ruleExplode = explode('|',$getRule);
                foreach($ruleExplode as $rule) {
                    $ruleSet = explode(':',$rule);
                    if(isset($ruleSet[1])) {
                        if($ruleSet[0] == 'max') {
                            $valid = (strlen($request[$key]) > $ruleSet[1]) ? false : true;
                            if(!$valid) {
                                array_push($validation,[$key => 'maxError']);
                            } 
                        } elseif ($ruleSet[0] == 'min') {
                            $valid = (strlen($request[$key]) < $ruleSet[1]) ? false : true;
                            if(!$valid) {
                                array_push($validation,[$key => 'minError']);
                            } 
                        }
                    }  else {
                        if($ruleSet[0] == 'email') {
                            $valid = (filter_var($request[$key],FILTER_VALIDATE_EMAIL)) ? true : false;
                            if(!$valid) {
                                array_push($validation,[$key => 'emailError']);
                            } 
                        } elseif($ruleSet[0] == 'unique') {
                            $email = $request['email'];
                            $valid = (conn::query("select id from users where email='$email'",true)) ? false : true;
                            if(!$valid) {
                                array_push($validation,[$key => 'uniqueError']);
                            } 
                        }
                    }
                }
            }
        }
        return $validation;
    }
    public static function secure($request,$rules) {
        $securedArr = [];
        foreach($rules as $key => $value) {
            if($value == 'email') {
                $res = filter_var($request[$key],FILTER_VALIDATE_EMAIL);
            } else if($value == 'text') {
                $res = filter_var($request[$key],FILTER_DEFAULT);
            }
            $securedArr[$key] = $res;
        }
        return $securedArr;
    }
}