<?php
date_default_timezone_set("Asia/Jakarta");
//FUNGSI WAKTU
//INPUT   : 2020-02-19 15:39:23
//OUTPUT  : Minggu, 19 April 2020

$tanggal = date("Y-m-d H:i:s");

echo tanggal_indo($tanggal); //OUTPUT  : Minggu, 19 April 2020
echo "<hr>";

function tanggal_indo($tanggal, $cetak_hari = false)
{
   $hari = [
      1 => "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu", "Minggu"
   ];

   $bulan = [
      1 => "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"
   ];

   $pisah = explode(" ", $tanggal);
   $tgl = explode("-", $pisah[0]);

   $tanggal_indo = $tgl[2] . ' ' . $bulan[(int) $tgl[1]] . ' ' . $tgl[0];

   if ($cetak_hari) {
      $day = date('N', strtotime($tanggal));
      return $hari[$day] . ', ' . $tanggal_indo;
   }
   return $tanggal_indo;
}


function rupiah($rp, $jenis = "idr")
{
   if ($jenis == "idr") {
      $hasil = "Rp. " . number_format($rp, 0, ',', '.') . ",-";
   } else if ($jenis == "usd") {
      $hasil = "$" . number_format($rp, 0, ',', '.') . ",-";
   }
   return $hasil;
}

echo rupiah(34500, 'idr');

//TUGAS NYA 
// BUAT FORM LOGIN 
// ->USERNAME 
// ->PASSSWORD
// ->SUBMIT
// DAN FUNGSI LOGIN NYA

// cekLogin("admin", "123", "aktif", "user");
