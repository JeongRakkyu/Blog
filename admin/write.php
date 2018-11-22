<?php
    session_start();
    if (!isset($_SESSION['id'])) {
        echo "<script>alert('정상적인 접근이 아닙니다!');location.replace('../');</script>";
        exit;
    }
    $id = $_SESSION['id'];

    include ('X');

    $subject = $_POST['subject'];
    $content = $_POST['content'];
    $query = "INSERT INTO X(X) VALUES('$subject', '$content')";

    if ($sql_connection->query($query)) {
        echo "<script>alert('정상적으로 등록되었습니다.'); location.replace('/');</script>";
    }
?>