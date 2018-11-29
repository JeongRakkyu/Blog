<?php
    $aa = file_get_contents('https://github.com/JeongRakkyu');
    $aa = explode("\n", $aa);
    $aa = json_encode($aa);
    echo "<script>var aa = $aa;</script>";
?>