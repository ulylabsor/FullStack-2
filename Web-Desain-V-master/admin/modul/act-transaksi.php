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

if (isset($_POST['btn-EditTransaksi'])) {
   $kdTransaksi    = $_POST['kd_transaksi'];
   $kdPengirim     = $_POST['kodePengirim'];
   $namaPengirim   = $_POST['namaPengirim'];
   $kontakPengirim = $_POST['kontakPengirim'];
   $alamatPengirim = $_POST['alamatPengirim'];
   $kdPenerima     = $_POST['kodePenerima'];
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
   $sqlPengirim    = "UPDATE pengirim SET nama_pengirim = '$namaPengirim', kontak='$kontakPengirim', alamat ='$alamatPengirim' WHERE kd_pengirim ='$kdPengirim'";
   $updatePengirim = mysqli_query($koneksi, $sqlPengirim);
   $kdPengirim     = mysqli_insert_id($koneksi);

   if ($updatePengirim) {
      //INSERTT PENERIMA
      $sqlPenerima    = "UPDATE penerima SET nama_penerima='$namaPenerima', kontak='$kontakPenerima', alamat='$alamatPenerima' WHERE kd_penerima='$kdPenerima'";
      $updatePenerima = mysqli_query($koneksi, $sqlPenerima);
      $kdPenerima     = mysqli_insert_id($koneksi);

      if ($updatePenerima) {
         //INSERT BARANG
         $sqlBarang    = "UPDATE barang SET nama_barang ='$namaBarang', jenis_barang='$jenisBarang', berat_barang='$beratBarang', updated_at=CURRENT_TIMESTAMP() WHERE kd_barang='$kodeBarang'";
         $updateBarang = mysqli_query($koneksi, $sqlBarang);

         //INSERT TRANSAKSI         
         $sqlTransaksi = "UPDATE `transaksi` SET `kd_layanan`= '$kdlayanan', `harga` ='$totalHarga', `asal`='$kotaAsal', `tujuan`='$kotaTujuan', `id_user`='$_SESSION[idUser]'";
         $updateTransaksi = mysqli_query($koneksi, $sqlTransaksi);
         if ($updateTransaksi) {
            notif('Berhasil ubah data transaksi', 1);
            header("Location: ?page=transaksi");
         }
      }
   }
}
