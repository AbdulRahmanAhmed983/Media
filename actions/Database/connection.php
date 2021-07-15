<?php 

class conn {
    protected static function connection() {
        $server = 'localhost';
        $database = 'social';
        $user = 'root';
        $password = '';

        $conn = mysqli_connect($server,$user,$password,$database);

        if($conn->connect_error) {
            die('error:' . $conn->connect_error);
        } else {
            return $conn;
        }
    }

    public static function query($query,$return,$id = false) {
      $connect = self::connection();
      $result = $connect->query($query);
      if($return == false) :
      
      ;else: 
        if($result) :
           return $result->fetch_all();
        endif;
      endif;
      if($id) {
        $connect->insert_id;
      }
      mysqli_close($connect);
    }
}