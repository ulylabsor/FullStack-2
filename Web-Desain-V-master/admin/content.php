<?php
$page = isset($_GET['page']) ? $_GET['page'] : '';

switch ($page) {
   case '':
      include 'view/dashboard.php';
      break;
   case 'home':
      include 'view/dashboard.php';
      break;
   case 'dashboard':
      include 'view/dashboard.php';
      break;
   case 'profil':
      include 'view/profil.php';
      break;
   case 'users':
      include 'view/users.php';
      break;
   case 'layanan':
      include 'view/layanan.php';
      break;
   case 'add-layanan':
      include 'view/add/add-layanan.php';
      break;
   case 'edit-layanan':
      include 'view/edit/edit-layanan.php';
      break;
   case 'transaksi':
      include 'view/transaksi.php';
      break;
   case 'add-transaksi':
      include 'view/add/add-transaksi.php';
      break;
   case 'edit-transaksi':
      include 'view/edit/edit-transaksi.php';
      break;
   case 'act-users':
      include 'modul/act-users.php';
      break;
   case 'act-transaksi':
      include 'modul/act-transaksi.php';
      break;
   case 'act-profil':
      include 'modul/act-profil.php';
      break;
   case 'act-layanan':
      include 'modul/act-layanan.php';
      break;


   case 'act-logout':
      include 'modul/act-logout.php';
      break;
   default:
      include 'view/404.php';
      break;
}
