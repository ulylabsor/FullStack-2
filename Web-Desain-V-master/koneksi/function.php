<?php
require 'conn.php';

function readLayanan()
{
   global $koneksi;
   $x = [];
   $sql = "SELECT * FROM layanan";
   $query = mysqli_query($koneksi, $sql);
   while ($data  = mysqli_fetch_assoc($query)) {
      $x[] = $data;
   }
   return $x;
}

$dataLayanan = readLayanan();
