<?php
    require_once("config/../../dbConnect.php");
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
            $sql = "INSERT INTO `user`(`username`, `email`, `password`) VALUES ('".mysqli_real_escape_string($db->Connect(),
            $this->userName)."','".mysqli_real_escape_string($db,
            $this->email)."','".md5(mysqli_real_escape_string($db->Connect(), $this->password))."')";
            $result = $db->QueryExecute($sql);
            return $result;
        }

        public static function CheckLogin($userName, $password) {
            $password = md5($password);
            $db = new Db();
            $sql = "SELECT * FROM user WHERE email = '$userName' AND password = '$password'";
            $result = $db->QueryExecute($sql);
            return $result;
        }
    }
?>