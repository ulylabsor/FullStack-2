<?php
require '../koneksi/conn.php';

function notif($pesan, $jenis)
{
   if ($jenis == 1) {
      $_SESSION['notif'] = "<div class='alert alert-success'>$pesan</div>";
   } else {
      $_SESSION['notif'] = "<div class='alert alert-danger'>$pesan</div>";
   }
}


function dataUsers()
{
   global $koneksi;
   $data = [];
   $sql = "SELECT * FROM users inner join users_profile on users.id_user=users_profile.id_user inner join users_role on users.id_role=users_role.id_role order by created_at asc";
   $query = mysqli_query($koneksi, $sql);
   while ($x = mysqli_fetch_assoc($query)) {
      $data[] = $x;
   }
   return $data;
}

function dataRole()
{
   global $koneksi;
   $data = [];
   $sql = "SELECT * FROM users_role order by role asc";
   $query = mysqli_query($koneksi, $sql);
   while ($x = mysqli_fetch_assoc($query)) {
      $data[] = $x;
   }
   return $data;
}