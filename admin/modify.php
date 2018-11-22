<?php
    session_start();
    if (!isset($_SESSION['id'])) {
        echo "<script>alert('정상적인 접근이 아닙니다!');location.replace('../');</script>";
        exit;
    }
    $id = $_SESSION['id'];

    $modified_subject = $_POST['subject'];
    $modified_content = $_POST['content'];
    $idx = $_GET['idx'];
    include ('X');

    $sql = "UPDATE X SET X = '$modified_subject', X = '$modified_content' WHERE X = '$idx'";

    if ($sql_connection->query($sql)) {
        echo "<script>alert('정상적으로 수정되었습니다.'); location.replace('/');</script>";
    }
?>