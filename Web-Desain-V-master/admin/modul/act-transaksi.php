<?php
if (isset($_POST['btn-AddTransaksi'])) {
   $kdTransaksi    = $_POST['kd_transaksi'];
   $namaPengirim   = $_POST['namaPengirim'];
   $kontakPengirim = $_POST['kontakPengirim'];
   $alamatPengirim = $_POST['alamatPengirim'];
   $namaPenerima   = $_POST['namaPenerima'];
   $kontakPenerima = $_POST['kontakPenerima'];
   $alamatPenerima = $_POST['alamatPenerima'];
   $namaBarang     = $_POST['namaBarang'];
   $jenisBarang    = $_POST['jenisBarang'];
   $beratBarang    = $_POST['beratBarang'];
   $kotaAsal       = $_POST['kotaAsal'];
   $kotaTujuan     = $_POST['kotaTujuan'];
   $layanan        = $_POST['layanan'];
   $totalHarga     = $_POST['totalHarga'];
}
