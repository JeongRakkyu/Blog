<?php
    session_start();
    if (!isset($_SESSION['id'])) {
        echo "<script>alert('정상적인 접근이 아닙니다!');location.replace('../');</script>";
        exit;
    }
    $id = $_SESSION['id'];
    
    include 'clear_data.php';
    $clear = new Cleardata($_POST['id'], $_POST['pw']);

    include 'check_data.php';
    $check = new Check_data($clear->id, $clear->pw);
    $check->login();
?>