<?php

    echo gettype("");

    /**
     * srtlen => yazının uzunluğu
     * str_word_count => kelime sayısı
     * strtolower => kelimeleri küçük yapar
     * strtoupper => kelimeleri büyük yapar
     * 
     * ~~~~~~~~~~~~~~~~~~~~~~~~
     * 
     * is_int => tam sayı olup olmadığını yazar
     * var_dump => veri tipini yazar
     * 
     * ~~~~~~~~~~~~~~~~~~~~~~~~
     * 
     * gettype => değişken tipini yazar
     * 
     * 
     * 
     * 
    */


    $plaka_bilgileri = array(
        "41" => "kocaeli",
        "34" => "istanbul",
        "53" => "rize",
        "37" => "kastamonu"
    );

    $urunler = array(
        [
            "urunAdi"=> "kitap",
            "fiyat" => 8
        ],
        [
            "urunAdi" => "pil",
            "fiyat" => 53
        ],
        [
            "urunAdi" => "silgi",
            "fiyat" => 20
        ]
        );

    echo "<br>".$plaka_bilgileri["41"]."<br>";

    foreach($urunler as $key) {
        echo $key["urunAdi"];
    }


?>