<?php
    session_start();
    if (!isset($_SESSION['id'])) {
        echo "<script>alert('정상적인 접근이 아닙니다!');location.replace('../');</script>";
        exit;
    }
    $id = $_SESSION['id'];

    include ('config.php');

    $subject = $_POST['subject'];
    $content = $_POST['content'];
    $category = $_POST['category'];
    $date = date("Y-m-d H:i:s");
    $query = "INSERT INTO X(X, X, X, X) VALUES('$subject', '$content', '$category', '$date')";

    if ($sql_connection->query($query) === TRUE) {
        echo "<script>alert('정상적으로 등록되었습니다.'); location.replace('/admin');</script>";
    } else {
        echo "Error : " . $sql_connection->error;
    }
?>