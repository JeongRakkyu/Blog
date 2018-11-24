<?php
    session_start();
    if (!isset($_SESSION['id'])) {
        echo "<script>alert('정상적인 접근이 아닙니다!');location.replace('../');</script>";
        exit;
    }
    $id = $_SESSION['id'];

    class Cleardata
    {
        public $id;
        public $pw;

        //variable setting
        function __construct($input_id, $input_pw) {
            $this->id = $this->cleardata($input_id);
            $this->pw = $this->cleardata($input_pw);
        }

        //data cleaning
        function cleardata($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        //password encrypt
        function pw_encrypt($input_password) {
            return password_hash($input_password, X);
        }
    }
?>