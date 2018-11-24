<?php
    session_start();
    if (!isset($_SESSION['id'])) {
        echo "<script>alert('정상적인 접근이 아닙니다!');location.replace('../');</script>";
        exit;
    }
    $id = $_SESSION['id'];

    $modified_subject = $_POST['subject'];
    $modified_content = $_POST['content'];
    $modified_category = $_POST['category'];
    $idx = $_GET['idx'];
    
    include ('config.php');

    $sql = "UPDATE X SET X = '$modified_subject', X = '$modified_content', X = '$modified_category' WHERE X = '$idx'";

    if ($sql_connection->query($sql)) {
        echo "<script>alert('정상적으로 수정되었습니다.'); location.replace('/admin');</script>";
    }
?>