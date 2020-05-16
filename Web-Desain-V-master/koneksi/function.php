<?php
require 'conn.php';

function readLayanan()
{
   global $koneksi;
   $x = [];
   $sql = "SELECT * FROM layanan";
   $query = mysqli_query($koneksi, $sql);
   while ($data  = mysqli_fetch_assoc($query)) {
      $x[] = $data;
   }
   return $x;
}
$dataLayanan = readLayanan();


//FUNCTION LOGIN
function login($email, $password)
{
   global $koneksi;
   $sql     = "SELECT * FROM users WHERE email = '$email'";
   $query   = mysqli_query($koneksi, $sql);
   $data    = mysqli_fetch_assoc($query);
   $cekData = mysqli_num_rows($query);
   if ($cekData > 0) { //CEK ADA DATA ATAU TIDAK
      if ($data['password'] == $password) { //CEK PASSWORD
         if ($data['aktif'] == 'Y') { //CEK STATUS AKUN AKTIF ATAU TIDAK
            // BUAT SESSION
            $_SESSION['idUser']     = $data['id_user'];
            $_SESSION['email']      = $data['email'];
            $_SESSION['username']   = $data['username'];
            $_SESSION['statusAkun'] = $data['aktif'];
            $_SESSION['idRole']     = $data['id_role'];

            //MENGATUR MANAGAMENT LOGIN
            if ($data['id_role'] == 1) { //SEBAGAI ADMIN
               return header("Location: admin/index.php");
            } else if ($data['id_role'] == 2) { //SEBAGAI Kurir
               return  header("Location: admin/index.php");
            } else if ($data['id_role'] == 4) { //SEBAGAI Manager
               return  header("Location: admin/index.php");
            } else if ($data['id_role'] == 3) { //SEBAGAI Customer
               return header("Location: index.php");
            }
         } else {
            return "Your account is not activated";
         }
      } else {
         return "Wrong Password";
      }
   } else {
      return "Username or email is not registered";
   }
}
