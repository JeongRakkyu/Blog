<?php
    include ('get_contents.php');

    $getC = new GetContents('https://github.com/JeongRakkyu');
    $wantA = $getC->extractHTML(707, 478, 1204, 2);
    $wantC = $getC->json($wantA);

    echo $wantC;
?>