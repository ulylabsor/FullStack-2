<?php
$bulan = $_GET['bulan'];

switch ($bulan) {
   case '01':
      $namaBulan = "Januari";
      break;
   case '02':
      $namaBulan = "Februari";
      break;
   case '03':
      $namaBulan = "Maret";
      break;
   case '04':
      $namaBulan = "April";
      break;
   default:
      $namaBulan = "Tidak dikenal";
      break;
}
echo $namaBulan;
