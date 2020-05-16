<?php
$page = isset($_GET['page']) ? $_GET['page'] : '';

switch ($page) {
   case '':
      include 'view/perusahaan.php';
      break;
   case 'perusahaan':
      include 'view/perusahaan.php';
      break;
   case 'layanan':
      include 'view/layanan.php';
      break;
   case 'layanan-reg':
      include 'view/layanan-reg.php';
      break;
   case 'layanan-yes':
      include 'view/layanan-yes.php';
      break;
   case 'ulasan':
      include 'view/ulasan-rating.php';
      break;


      //LOGIN 
   case 'login':
      include 'view/login.php';
      break;
   case 'act-login':
      include 'modul/act-login.php';
      break;
   case 'act-logout':
      include 'modul/act-logout.php';
      break;
   default:
      include 'view/404.php';
      break;
}
