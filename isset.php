<?php

    $umur = 20;

    if (isset($umur) && $umur >= 18) {
        echo "Anda sudah dewasa";
    } else {
        echo "Anda belum dewasa atau variabel 'umur' tidak ditemukan";
    }

    echo "<br><br>";

    $data = array("nama" => "Jane", "usia" => 25);

    if (isset($data["nama"])) {
        echo "Nama : " .$data["nama"];
    } else {
        echo "Variabel 'nama' tidak ditemukan dalam array";
    }

    echo "<br><br>";

    $nama = "";

    if (empty($nama)) {
        echo "Nama tidak terdefinisi atau kosong";
    } else {
        echo "Nama terdefinisi dan tidak kosong";
    }
    
    

?>