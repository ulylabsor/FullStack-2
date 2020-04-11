<?php
//Operator Artimatika
$angka1 = 30;
$angka2 = 10;

$tambah  = $angka1 + $angka2;
$kurang  = $angka1 - $angka2;
$kali    = $angka1 * $angka2;
$bagi    = $angka1 / $angka2;
$modulus = $angka1 % $angka2;

$hasil = $angka1 + ($angka2 * $angka1) / $angka2;

echo $tambah . "<br>";
echo $kurang . "<br>";
echo $kali . "<br>";
echo $bagi . "<br>";
echo $modulus . "<br>";
echo $hasil . "<br>";

echo "<hr>";
//OPERATOR UNARY
$angka3 = 12;
$unary = -$angka3;
var_dump($unary);

echo "<hr>";
//OPERATOR ASSIGMENT /PENUGASAN
$angka4 = 56; //sama dengan (=) adalah operator assigment
echo $angka4;

echo "<hr>";
//OPERATOR PERBANDINGAN
// >, <, >=, <=, <>, ==
$angka5 = 10;
$angka6 = 3;
var_dump($angka5 > $angka6);


echo "<hr>";
//OPERATOR LOGIKA
$angka7 = 90;
$angka8 = 100;

var_dump(($angka7 == $angka8) or ($angka7 < $angka8)); //OR

echo !($angka7 == $angka8); //NOT 


echo "<hr>";
//OPERATOR INCREMENT dan DECREMENT
$angka9 = 100;
// PRE INCREMENT
echo ++$angka9;
echo "<br>";
// POST INCREMENT
$angka10 = 100;
echo $angka10++;
echo "<br>";
echo $angka10;
echo "<br>";

//PRE DECREMENT
$angka11 = 100;
echo --$angka11;
echo "<br>";

//POST DECREMENT 
$angka12 = 100;
echo $angka12--;
echo "<br>";
echo $angka12;

echo "<br>";
$urut = 5;
echo $urut--;
echo $urut--;
echo $urut--;
echo $urut--;
echo $urut--;

echo "<hr>";

//LATIHAN 
$harga = 7500000;
$diskon = "30%";

$hasil = ($harga * 0.3);

var_dump($hasil);
