<?php

    // function perkenalan($nama, $salam = "Assalamualaikum"){

    //     echo $salam . ", ";
    //     echo "Perkenalkan, nama saya " . $nama.  "<br>";
    //     echo "Senang berkenalan dengan Anda <br>";

    // }

    // perkenalan("Yolanda");

    // echo "<hr>";

    // $saya = "Elok";
    // $ucapanSalam= "Selamat Pagi";


    // perkenalan($saya);

    // soal no 7

    function hitungUmur($thn_lahir, $thn_sekarang){
        $umur = $thn_sekarang - $thn_lahir;
        return $umur;
    }

    echo "<br>";

    echo "Umur saya adalah " . hitungUmur(1988, 2023) . " tahun";

    echo "<br>";
    echo "<br>";

    // soal no 8

    

    function perkenalan($nama, $salam = "Assalamualaikum"){

        echo $salam . ", ";
        echo "Perkenalkan, nama saya " . $nama.  "<br>";

        echo "Saya berusia " . hitungUmur(1988, 2022) . " tahun <br>";
        echo "Saya senang berkenalan dengan Anda <br>";

    }

    perkenalan("Yolanda")


    



    




?>