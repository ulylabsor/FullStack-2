<?php
//VARIABEL
// $kota1 = "Palembang";
// $kota2 = "Jakarta";
// $kota3 = "Semarang";
// $kota4 = "Bandung";
// $kota5 = "Palu";

// echo $kota1 . "<br>";
// echo $kota2 . "<br>";
// echo $kota3 . "<br>";
// echo $kota4 . "<br>";
// echo $kota5 . "<br>";

// ARRAY NUMERIC
// $kota[0] = "Palembang";
// $kota[1] = "Jakarta";
// $kota[2] = "Semarang";
// $kota[3] = "Bandung";
// $kota[4] = "Palu";

$kota = [
   1 => "Palembang",  "Semarang", "Bandung", "Palu", "Gorontalo"
];

for ($i = 1; $i <= count($kota); $i++) {
   echo $kota[$i];
   echo "<br>";
}

foreach ($kota as $data) {
   echo $data . "<br>";
}
