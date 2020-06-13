<?php
if (isset($_POST['ubahProfil'])) {
   $idUser        = $_SESSION['idUser'];
   $namaDepan     = $_POST['namaDepan'];
   $namaBelakang  = $_POST['namaBelakang'];
   $jk            = $_POST['jk'];
   $tglLahir      = date("Y-m-d", strtotime($_POST['tglLahir']));
   $noTelp        = $_POST['noTelp'];
   $alamat        = $_POST['alamat'];

   $namaFoto      = $_FILES['fotoProfil']['name'];
   $x             = explode('.', $namaFoto); //memisah nama file berdasarkan titik
   // nama file = gambar.23.jpg
   // 0 -> gambar
   // 1 -> 23
   // 2 -> JPG -> jpg
   $ekstensiFoto  = strtolower(end($x));
   $ukuranFoto    = $_FILES['fotoProfil']['size'];
   $tempFoto      = $_FILES['fotoProfil']['tmp_name'];

   $ekstensiBoleh = ['jpg', 'png', 'gif'];
   $ukuranBoleh   = 5000000;

   // LAKUKAN PENGECEKAN
   if ($namaFoto == null) {
      $sql = "UPDATE `users_profile` SET `nama_depan`='$namaDepan',`nama_belakang`='$namaBelakang',`tgl_lahir`='$tglLahir',`jk`='$jk',`alamat`='$alamat',`kontak`='$noTelp' WHERE `id_user`='$idUser'";
      $updateProfil = mysqli_query($koneksi, $sql);
      if ($updateProfil) {
         notif('Berhasil ubah profil', 1);
         header("Location: ?page=profil");
      }
   } else {
      if (in_array($ekstensiFoto, $ekstensiBoleh)) {
         if ($ukuranFoto < $ukuranBoleh) {
            $fileName = rand(1, 100) . '-' . $_FILES['fotoProfil']['name']; // modifikasi nama file nya
            $upload = move_uploaded_file($tempFoto, 'assets/img/' . $fileName);

            $sql = "UPDATE `users_profile` SET `nama_depan`='$namaDepan',`nama_belakang`='$namaBelakang',`tgl_lahir`='$tglLahir',`jk`='$jk',`alamat`='$alamat',`kontak`='$noTelp', `foto`='$fileName' WHERE `id_user`='$idUser'";
            $updateProfil = mysqli_query($koneksi, $sql);
            if ($updateProfil) {
               notif('Berhasil ubah profil', 1);
               header("Location: ?page=profil");
            }
         } else {
            notif('Ukuran Foto terlalu Besar Max. 1 MB', 2);
            header("Location: ?page=profil");
         }
      } else {
         notif('Ekstensi Foto tidak sesuai | jpg, png, gif', 2);
         header("Location: ?page=profil");
      }
   }
}

if (isset($_POST['ubahPassword'])) {
   $idUser   = $_SESSION['idUser'];
   $username = $_POST['username'];
   $email    = $_POST['email'];
   $passLama = md5($_POST['passwordLama']);

   // var_dump($_POST['passwordLama']);
   // die;
   if ($_POST['passwordLama'] == '') {
      $queryUpdate = mysqli_query($koneksi, "UPDATE users SET username ='$username', email='$email' WHERE id_user='$idUser'");
      if ($queryUpdate) {
         notif('Berhasil ubah profil', 1);
         header("Location: ?page=profil");
      }
   } else {
      $query   = mysqli_query($koneksi, "SELECT * FROM users WHERE password = '$passLama' AND id_user = '$idUser'");
      $cekData = mysqli_num_rows($query);
      if ($cekData > 0) {
         $passBaru = md5($_POST['passwordBaru']);
         $passBaru2 = md5($_POST['passwordBaru2']);
         if ($passBaru == $passBaru2) {
            $update = mysqli_query($koneksi, "UPDATE users SET password = '$passBaru', email = '$email' , username = '$username' WHERE id_user='$idUser'");
            if ($update) {
               notif('Berhasil ubah password', 1);
               header("Location: ?page=profil");
            }
         } else {
            //NOTIF PASSWORD TIDAK SAMA
            notif('Password Tidak Sama', 2);
            header("Location: ?page=profil");
         }
      } else {
         //NOTIF PASSWORD LAMA SALAH
         notif('Password Lama Salah', 0);
         header("Location: ?page=profil");
      }
   }
}
