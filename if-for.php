<?php

//percabangan (IF ELSE)
$nilai=80;
echo " Nilai kamu = $nilai <br>";
echo " Maka status kamu =";

if ($nilai >=75){
    echo " Lulus Beneran";
} else if ($nilai == 75){
    echo"Lulus KKM";
} else {
    echo " Tidak Lulus";
}

 echo " <hr>";

 $nilai_web = 78;
 $nilai_pbo = 80;
echo "Nilai Web Kamu = $nilai_web <br>";
echo "Nilai Pbo Kamu = $nilai_pbo <br>";
echo "Hasil Kelulusan kamu =";
 if ( $nilai_web >= 80 AND $nilai_pbo >= 80 ) {
    echo " Lulus Nilai Produktif 2 Mapel";
 }else if ($nilai_web >= 80 OR $nilai_pbo >= 80){
    echo "Lulus Nilai Produktif Salah Satu Mapel";
 }else{
    echo "Tidak Lulus Nilai Produktif";
 }

    echo "<hr>";

    //perulangan (While, Do While, For)
    $i = 1;
    while ($i < 5){
        echo "Hello World ! ke - $i <br>";
        $i++; // Assigment +1
    }

    echo "<hr>";

    $no =1;
    do {
        echo "Hallo Dunia ! <br>";
        $no++;
    }while ($no < 5);

    echo "<hr>";

    $nomor = 1;
    for ($nomor; $nomor < 5; $nomor++){
        echo "Kamsamidha ! <br>";
    }

    echo "<hr>";

    // Praktikum IF Di Dalam FOR
    echo "Case 1 : Menentukan Angka Ganjil & Genap <br>";
    $angka = 1;
    for ($angka; $angka <= 10; $angka++){
        if ($angka % 2 ==0) {
            echo "$angka = Bilangan Genap <br>";
        }else {
            echo "$angka = Bilangan Ganjil <br>";
        }
    }
    echo "<hr>";
    
    //Pratikum FOR Didalam FOR
    echo "case 2 = Angka Berulang <br>";
    $x = 1;
    for ($x; $x <= 9; $x++){
        for ($y = $x; $y <= 9; $y++){
            echo $x;
        }
        echo "<br>";
    }
