<?php
require '../koneksi/conn.php';
require 'model_users.php';
require 'model_layanan.php';
require 'model_transaksi.php';

function notif($pesan, $jenis)
{
   if ($jenis == 1) {
      $_SESSION['notif'] = "<div class='alert alert-success'>$pesan</div>";
   } elseif ($jenis == 2) {
      $_SESSION['notif'] = "<div class='alert alert-warning'>$pesan</div>";
   } else {
      $_SESSION['notif'] = "<div class='alert alert-danger'>$pesan</div>";
   }
}

function generateIdTransaksi($length = 8)
{
   $genpassword = "";
   $possible = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
   $i = 0;
   while ($i < $length) {
      $char = substr($possible, mt_rand(0, strlen($possible) - 1), 1);
      if (!strstr($genpassword, $char)) {
         $genpassword .= $char;
         $i++;
      }
   }
   return $genpassword;
}
