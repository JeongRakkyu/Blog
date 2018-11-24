<?php
    session_start();
    if (!isset($_SESSION['id'])) {
        echo "<script>alert('정상적인 접근이 아닙니다!');location.replace('../');</script>";
        exit;
    }
    $id = $_SESSION['id'];

    $idx = $_GET['idx'];
    include ('config.php');

    $sql = "DELETE FROM X WHERE X = '$idx'";

    if ($sql_connection->query($sql)) {
        echo "<script>alert('정상적으로 삭제되었습니다.'); location.replace('/admin');</script>";
    }
?>