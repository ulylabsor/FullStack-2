<?php
if (isset($_POST['btn-AddTransaksi'])) {
   $kdTransaksi    = $_POST['kd_transaksi'];
   $namaPengirim   = $_POST['namaPengirim'];
   $kontakPengirim = $_POST['kontakPengirim'];
   $alamatPengirim = $_POST['alamatPengirim'];
   $namaPenerima   = $_POST['namaPenerima'];
   $kontakPenerima = $_POST['kontakPenerima'];
   $alamatPenerima = $_POST['alamatPenerima'];
   $kodeBarang     = $_POST['kodeBarang'];
   $namaBarang     = $_POST['namaBarang'];
   $jenisBarang    = $_POST['jenisBarang'];
   $beratBarang    = $_POST['beratBarang'];
   $kotaAsal       = $_POST['kotaAsal'];
   $kotaTujuan     = $_POST['kotaTujuan'];
   $kdlayanan      = $_POST['pilihLayanan'];
   $totalHarga     = $_POST['hargaTotal'];


   //INSERRT PENGIRIM
   $sqlPengirim    = "INSERT INTO `pengirim`(`nama_pengirim`, `kontak`, `alamat`) VALUES ('$namaPengirim','$kontakPengirim','$alamatPengirim')";
   $insertPengirim = mysqli_query($koneksi, $sqlPengirim);
   $kdPengirim     = mysqli_insert_id($koneksi);

   if ($insertPengirim) {
      //INSERTT PENERIMA
      $sqlPenerima    = "INSERT INTO `penerima`(`nama_penerima`, `kontak`, `alamat`) VALUES ('$namaPenerima','$kontakPenerima','$alamatPenerima')";
      $insertPenerima = mysqli_query($koneksi, $sqlPenerima);
      $kdPenerima     = mysqli_insert_id($koneksi);

      if ($insertPenerima) {
         //INSERT BARANG
         $sqlBarang    = "INSERT INTO `barang`(`kd_barang`, `nama_barang`, `jenis_barang`, `berat_barang`, `created_at`) VALUES ('$kodeBarang','$namaBarang','$jenisBarang','$beratBarang',CURRENT_TIMESTAMP())";
         $insertBarang = mysqli_query($koneksi, $sqlBarang);

         //INSERT TRANSAKSI         
         $sqlTransaksi = "INSERT INTO `transaksi`(`kd_transaksi`, `kd_pengirim`, `kd_penerima`, `kd_barang`, `kd_layanan`, `harga`, `asal`, `tujuan`, `id_user`) VALUES ('$kdTransaksi','$kdPengirim','$kdPenerima','$kodeBarang','$kdlayanan','$totalHarga','$kotaAsal','$kotaTujuan','$_SESSION[idUser]')";
         $insertTransaksi = mysqli_query($koneksi, $sqlTransaksi);
         if ($insertTransaksi) {
            notif('Berhasil tambah data transaksi', 1);
            header("Location: ?page=transaksi");
         }
      }
   }
}
