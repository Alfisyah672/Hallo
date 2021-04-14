<?php


function cetak_bintang($jumlah)
{
    for ($i = $jumlah; $i > 0; $i--) {

        for ($j = 0; $j < $i; $j++) {
            echo "*";
        }
        echo "<br>";
    }
}

//3
// 2
// 1

cetak_bintang(3);
cetak_bintang(7);
?>