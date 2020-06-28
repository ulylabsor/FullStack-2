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


function getTransaksi()
{
   global $koneksi;
   $data = [];
   $sql = "SELECT *, pengirim.kontak as kontakPengirim, penerima.kontak as kontakPenerima, kotaAsal.kota as kotaAsal, kotaTujuan.kota as kotaTujuan FROM transaksi inner join pengirim on transaksi.kd_pengirim=pengirim.kd_pengirim inner join penerima on transaksi.kd_penerima=penerima.kd_penerima inner join barang on barang.kd_barang=transaksi.kd_barang inner join kota as kotaAsal on kotaAsal.id_kota=transaksi.asal inner join kota as kotaTujuan on kotaTujuan.id_kota=transaksi.tujuan inner join layanan on layanan.kd_layanan=transaksi.kd_layanan";
   $query = mysqli_query($koneksi, $sql);
   while ($x = mysqli_fetch_assoc($query)) {
      $data[] = $x;
   }
   return $data;
}


function getTransaksiById($kdTransaksi)
{
   global $koneksi;
   $sql = "SELECT *, pengirim.kontak as kontakPengirim, penerima.kontak as kontakPenerima, kotaAsal.kota as kotaAsal, kotaTujuan.kota as kotaTujuan, pengirim.alamat as alamatPengirim, penerima.alamat as alamatPenerima, transaksi.asal as idKotaAsal, transaksi.tujuan as idKotaTujuan FROM transaksi inner join pengirim on transaksi.kd_pengirim=pengirim.kd_pengirim inner join penerima on transaksi.kd_penerima=penerima.kd_penerima inner join barang on barang.kd_barang=transaksi.kd_barang inner join kota as kotaAsal on kotaAsal.id_kota=transaksi.asal inner join kota as kotaTujuan on kotaTujuan.id_kota=transaksi.tujuan inner join layanan on layanan.kd_layanan=transaksi.kd_layanan inner join jenis_barang on barang.jenis_barang=jenis_barang.kd_jenis WHERE  kd_transaksi='$kdTransaksi'";
   $query = mysqli_query($koneksi, $sql);
   $x = mysqli_fetch_assoc($query);
   return $x;
}
