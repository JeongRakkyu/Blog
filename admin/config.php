<?php
    session_start();
    if (!isset($_SESSION['id'])) {
        echo "<script>alert('정상적인 접근이 아닙니다!');location.replace('../');</script>";
        exit;
    }
    $id = $_SESSION['id'];
    
    $servername = "X";
    $username = "X";
    $password = "X";
    $dbname = "X";

    $sql_connection = new mysqli($servername, $username, $password, $dbname);

    if ($sql_connection->connect_error) {
        die("<script>console.log('$sql_connection->connect_error');</script>");
        exit;
    }
?>