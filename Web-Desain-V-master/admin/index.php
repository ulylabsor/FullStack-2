<?php
session_start();
require 'koneksi/function-admin.php';
if (empty($_SESSION)) {
   header("Location: ../?page=login");
} else if ($_SESSION['idRole'] == 3) {
   header("Location: ../?page=login");
}

?>
<!doctype html>
<html lang="en">

<head>
   <?php include 'kepala.php' ?>
</head>

<body>
   <?php include 'header.php' ?>

   <div class="container-fluid">
      <div class="row">

         <?php include 'menu.php' ?>

         <?php include 'content.php' ?>

      </div>
   </div>

   <?php include 'kaki.php' ?>
</body>

</html>