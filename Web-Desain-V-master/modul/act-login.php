<?php
if (isset($_POST['btnLogin'])) {
   $email    = $_POST['email'];
   $password = md5($_POST['password']);
   echo login($email, $password);
}
