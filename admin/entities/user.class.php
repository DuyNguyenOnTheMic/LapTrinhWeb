<?php
    require_once("login-config/db.class.php");
    
    class User {
        public $userId;
        public $first_name;
        public $last_name;
        public $email;
        public $password;

        public function __construct($first_name, $last_name, $email, $password) {
            $this->first_name = $first_name;
            $this->last_name = $last_name;
            $this->email = $email;
            $this->password = $password;
        }

        public function Save() {
            $db = new Db();
            $sql = "INSERT INTO `users`(`first_name`, `last_name`,`email`, `password`) 
            VALUES ('".mysqli_real_escape_string($db->Connect(),$this->first_name)."',
            '".mysqli_real_escape_string($db->Connect(),$this->last_name)."',
            '".mysqli_real_escape_string($db->Connect(),$this->email)."',
            '".md5(mysqli_real_escape_string($db->Connect(), $this->password))."')";
            $result = $db->QueryExecute($sql);
            return $result;
        }

        public static function CheckLogin($userName, $password) {
            $password = md5($password);
            $db = new Db();
            $sql = "SELECT * FROM users WHERE email = '$userName' AND password = '$password'";
            $result = $db->QueryExecute($sql);
            return $result;
        }
    }
