<?php
// 1. BUILT IN FUNCTION

$today = date("d-m-Y"); //Output: 19/04/2020
$pisah = explode("-", $today); //Output dalam bentuk array

$kota = "Palembang";
echo substr($kota, 2, 5);


$city = ["Palembang", "Jakarta", "Semarang", "Bandung", "Palu"];

rsort($city);

$cekArray = in_array("palembang", $city);

var_dump($cekArray);

echo "<hr>";

// UPLOAD FILE DENGAN KETENTUAN FILE YANG BOLEH DIUPLOAD BEREKSTENSI JPG, PNG, GIF

$namaFile      = "gam.bar1.GIF";
$ekstensiBoleh = ['png', 'jpg', 'gif'];
$x             = explode(".", $namaFile);
$eks           = strtolower(end($x));

if (in_array($eks, $ekstensiBoleh)) {
   echo "Valid Image";
} else {
   echo "Invalid Image";
}

echo "<hr>";

// 2. USER DEFINED FUNCTION
// FUNGSI TANPA PARAMETER
function fungsiSaya()
{
   return "Fungsi Pertama Saya " . Hello();
}

function Hello()
{
   return "Hello World";
}

echo Hello();

echo "<hr>";


//FUNGSI MENGGUNAKAN PARAMETER
function aritmatika($angka1 = 0, $angka2 = 0, $operator = "+")
{
   if ($operator == "+") {
      $hasil =  $angka1 + $angka2;
   } else if ($operator == "-") {
      $hasil =  $angka1 - $angka2;
   } else if ($operator == "*") {
      $hasil =  $angka1  * $angka2;
   } else if ($operator == "/") {
      $hasil =  $angka1 / $angka2;
   }
   return $hasil . "<br>";
}

echo aritmatika(10, 5, "+");
echo aritmatika(10, 5, "-");
echo aritmatika(0, 5, "*");
echo aritmatika();
