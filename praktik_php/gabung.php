<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penggabungan PHP dalam HTML</title>
</head>
<body>

    <P>
        Tanggal hari ini : <?php echo date("d M Y") ?>
    </P>
    
</body>
</html>


<?php

    echo '<html>';
    echo '<head><title> Cara 2 </title></head>';
    echo '<body';
    echo '<p> Tanggal Hari ini : ' .date('d M Y') . '</p>';
    echo '<body';
    echo '</html>';



?>