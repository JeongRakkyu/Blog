<?php
    $aa = file_get_contents('https://github.com/JeongRakkyu');
    $aa = explode("\n", $aa);
    $bb = array_slice($aa, 707, 478);
    $cc = array_slice($aa, 1204, 2);
    $dd = array_merge($bb, $cc);
    $dd = json_encode($dd);
    echo $dd;
?>