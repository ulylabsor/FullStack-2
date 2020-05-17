<?php
$page = isset($_GET['page']) ? $_GET['page'] : '';

switch ($page) {
   case '':
      include 'view/home.php';
      break;
   case 'home':
      include 'view/home.php';
      break;
   case 'users':
      include 'view/users.php';
      break;
   case 'act-users':
      include 'modul/act-users.php';
      break;


   case 'act-logout':
      include 'modul/act-logout.php';
      break;
   default:
      include 'view/404.php';
      break;
}
