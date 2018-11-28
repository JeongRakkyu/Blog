<?php
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