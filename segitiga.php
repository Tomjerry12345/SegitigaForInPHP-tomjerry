<?php
/*
created by tomjerry
*/
$jumlah = 4;
$angka = 1;
$angka2 = 9;

for($a=1; $a<=$jumlah; $a++){
    for($c=$jumlah; $c>=$a; $c-=1){
        if($a == 1)
            if($c == 4)
                echo '2  ';
            else
                echo $angka = $angka + 2 , "  ";
        else if($a == 2)
            if($c == 2)
                echo "17 ";
            else
                echo $angka2 = $angka2 + 2 , " ";
        else if($a == 3)
            if($c == 4)
                echo "19 ";
            else
                echo "23 ";
        else
            echo "29 ";
            
    }
    echo "\n";
}
