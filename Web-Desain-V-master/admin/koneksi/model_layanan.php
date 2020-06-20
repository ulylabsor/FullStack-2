<?php
function dataLayanan()
{
   global $koneksi;
   $data = [];
   $sql = "SELECT * FROM layanan";
   $query = mysqli_query($koneksi, $sql);
   while ($x = mysqli_fetch_assoc($query)) {
      $data[] = $x;
   }
   return $data;
}


function insertLayanan($kode, $layanan, $harga, $keterangan)
{
   global $koneksi;
   $sql = "INSERT INTO layanan (kd_layanan, layanan, harga, keterangan) VALUES ('$kode', '$layanan', '$harga', '$keterangan')";
   $insertLayanan = mysqli_query($koneksi, $sql);
   return $insertLayanan;
}

function updateLayanan($kode, $layanan, $harga, $keterangan)
{
   global $koneksi;
   $sql = "UPDATE layanan SET layanan = '$layanan', harga = '$harga', keterangan = '$keterangan' WHERE kd_layanan = '$kode'";
   $updateLayanan = mysqli_query($koneksi, $sql);
   return $updateLayanan;
}

function deleteLayanan($id)
{
   global $koneksi;
   $sql = "DELETE FROM layanan WHERE kd_layanan = '$id'";
   $deleteLayanan = mysqli_query($koneksi, $sql);

   return $deleteLayanan;
}

function dataLayananById($id)
{
   global $koneksi;
   $sql = "SELECT * FROM layanan WHERE kd_layanan = '$id'";
   $query = mysqli_query($koneksi, $sql);
   $data = mysqli_fetch_assoc($query);
   return $data;
}
