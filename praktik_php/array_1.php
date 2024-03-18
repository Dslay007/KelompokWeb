<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h2, initial-scale=1.0">
    <title>Array Terindex</title>
</head>
<body>
    
    <h2>Array Terindex</h2>
    <?php 

        $ListDosen = ["Elok Nur Hamdana", "Unggul Pamenang", "Bagas Nugraha"];

        echo $ListDosen[2], "<br>";
        echo $ListDosen[0], "<br>";
        echo $ListDosen[1], "<br>";

    ?>

    <!-- perulangan -->

    <br><br>

   <p>Array terindex dengan metode perulangan</p>

    <?php

        for ($i=0; $i < count($ListDosen); $i++) { 
            echo $ListDosen[$i], "<br>";
        }


    ?>

</body>
</html>