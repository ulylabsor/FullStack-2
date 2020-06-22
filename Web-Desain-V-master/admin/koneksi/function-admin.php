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
