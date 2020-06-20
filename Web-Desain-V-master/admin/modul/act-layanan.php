<?php
if (isset($_POST['btn-AddLayanan'])) {
   $kode       = $_POST['kode'];
   $layanan    = $_POST['layanan'];
   $harga      = $_POST['harga'];
   $keterangan = $_POST['keterangan'];

   $insertLayanan = insertLayanan($kode, $layanan, $harga, $keterangan);

   if ($insertLayanan) {
      notif('Berhasil tambah data layanan', 1);
      header("Location: ?page=layanan");
   }
}

if (isset($_GET['aksi'])) {
   if ($_GET['aksi'] == 'delete') {
      $id = $_GET['id'];

      $deleteLayanan = deleteLayanan($id);
      if ($deleteLayanan) {
         notif('Berhasil hapus data layanan', 1);
         header("Location: ?page=layanan");
      }
   }
}

if (isset($_POST['btn-EditLayanan'])) {
   $kode       = $_POST['kode'];
   $layanan    = $_POST['layanan'];
   $harga      = $_POST['harga'];
   $keterangan = $_POST['keterangan'];

   $updateLayanan = updateLayanan($kode, $layanan, $harga, $keterangan);

   if ($updateLayanan) {
      notif('Berhasil Ubah data layanan', 1);
      header("Location: ?page=layanan");
   }
}
