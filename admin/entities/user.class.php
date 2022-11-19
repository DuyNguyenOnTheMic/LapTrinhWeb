<?php
    require_once("login-config/db.class.php");
    
    class User {
        public $userId;
        public $userName;
        public $email;
        public $password;

        public function __construct($u_name, $u_email, $u_pass) {
            $this->userName = $u_name;
            $this->email = $u_email;
            $this->password = $u_pass;
        }

        public function Save() {
            $db = new Db();
            $sql = "INSERT INTO `user`(`username`, `email`, `password`) VALUES ('".mysqli_real_escape_string($db->Connect(),
            $this->userName)."','".mysqli_real_escape_string($db->Connect(),
            $this->email)."','".md5(mysqli_real_escape_string($db->Connect(), $this->password))."')";
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
