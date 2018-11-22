<?php
    session_start();
    session_destroy();

    echo "<script>alert('정상적으로 로그아웃되었습니다!');location.replace('../');</script>";
?>