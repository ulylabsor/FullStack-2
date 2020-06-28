<?php
function getJenisBarang()
{
   global $koneksi;
   $data = [];
   $sql = "SELECT * FROM jenis_barang";
   $query = mysqli_query($koneksi, $sql);
   while ($x = mysqli_fetch_assoc($query)) {
      $data[] = $x;
   }
   return $data;
}

function getKota()
{
   global $koneksi;
   $data = [];
   $sql = "SELECT * FROM kota";
   $query = mysqli_query($koneksi, $sql);
   while ($x = mysqli_fetch_assoc($query)) {
      $data[] = $x;
   }
   return $data;
}


