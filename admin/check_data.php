<?php
    session_start();
    if (!isset($_SESSION['id'])) {
        echo "<script>alert('정상적인 접근이 아닙니다!');location.replace('../');</script>";
        exit;
    }
    $id = $_SESSION['id'];

    class Check_data
    {
        private $id_check;
        private $pw_check;
        private $id;
        private $pw;
        
        //variable setting(load DB data);
        function __construct($input_id, $input_pw) {
            include 'config.php';
            $this->id_check = $sql_connection->query("SELECT X FROM X WHERE X = '$input_id'")->num_rows;
            $this->pw_check = $sql_connection->query("SELECT X FROM X WHERE X = '$input_id'")->fetch_assoc();
            $sql_connection->close();
            $this->id = $input_id;
            $this->pw = $input_pw;
        }
        
        function login() {
            if ($this->id_check > 0 && password_verify($this->pw, $this->pw_check['X']) === TRUE) {
                session_start();
                $_SESSION['id'] = $this->id;
                echo "<script>alert('$this->id님 로그인 되었습니다!');location.replace('index.html');</script>";
                exit;
            } else {
                echo "<script>alert('정상적인 접근이 아닙니다!');location.replace('/');</script>";
                exit;
            }
        }
    }