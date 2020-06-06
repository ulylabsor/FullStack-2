<?php
if (isset($_POST['btn-AddUsers'])) {
   $username     = $_POST['username'];
   $email        = $_POST['email'];
   $password     = md5($_POST['password']);
   $role         = $_POST['role'];
   $status       = isset($_POST['status']) ? $_POST['status'] == 'on' ? 'Y' : 'N' : 'N';
   $namaDepan    = $_POST['namaDepan'];
   $namaBelakang = $_POST['namaBelakang'];

   //INSERT TABLE users
   $sql = "INSERT INTO `users`(`username`, `email`, `password`, `created_at`, `aktif`, `id_role`) VALUES ('$username','$email','$password',CURRENT_TIMESTAMP(),'$status','$role')";
   $insertUsers = mysqli_query($koneksi, $sql);
   $idUser = mysqli_insert_id($koneksi); // mengambil id_user yang berusan di insert

   if ($insertUsers) {
      //INSERT TABLE users_profile
      $sql2 = "INSERT INTO `users_profile`(`nama_depan`, `nama_belakang`, `id_user`) VALUES ('$namaDepan','$namaBelakang','$idUser')";
      $insertProfil = mysqli_query($koneksi, $sql2);

      notif('Berhasil tambah data users', 1);
      header("Location: ?page=users");
   }
}

if (isset($_POST['btn-EditUsers'])) {
   $idUser       = $_POST['idUser'];
   $username     = $_POST['username'];
   $email        = $_POST['email'];
   $password     = md5($_POST['password']);
   $role         = $_POST['role'];
   $status       = isset($_POST['status']) ? $_POST['status'] == 'on' ? 'Y' : 'N' : 'N';
   $namaDepan    = $_POST['namaDepan'];
   $namaBelakang = $_POST['namaBelakang'];

   //UBAH DATA TABLE users
   $sql = "UPDATE `users` SET `username`= '$username', `email`='$email', `password`='$password', `updated_at`=CURRENT_TIMESTAMP(), `aktif`='$status', `id_role` ='$role' WHERE id_user = '$idUser'";
   $updateUsers = mysqli_query($koneksi, $sql);

   if ($updateUsers) {
      //UPDATE TABLE users_profile
      $sql2 = "UPDATE `users_profile` SET `nama_depan` ='$namaDepan', `nama_belakang` ='$namaBelakang' WHERE id_user = '$idUser'";
      $updateProfil = mysqli_query($koneksi, $sql2);

      notif('Berhasil ubah data users', 1);
      header("Location: ?page=users");
   }
}


if (isset($_GET['aksi'])) {
   if ($_GET['aksi'] == 'delete') {
      $idUser = $_GET['id']; //ambil id user dengan method get  

      $sql = "DELETE FROM users WHERE id_user ='$idUser'";
      $deleteUsers = mysqli_query($koneksi, $sql);
      if ($deleteUsers) {
         notif('Berhasil hapus data users', 1);
         header("Location: ?page=users");
      }
   }
}
