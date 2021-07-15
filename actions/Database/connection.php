<?php 

class conn {
    protected static function connection() {
        // $server = 'localhost';
        // $database = 'social';
        // $user = 'root';
        // $password = '';

        // $conn = mysqli_connect($server,$user,$password,$database);
        $cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
        $cleardb_server = $cleardb_url["host"];
        $cleardb_username = $cleardb_url["user"];
        $cleardb_password = $cleardb_url["pass"];
        $cleardb_db = substr($cleardb_url["path"],1);
        $conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);

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