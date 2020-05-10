<?php
define('SERVER', 'localhost');
define('USERNAME', 'root');
define('PASSWORD', 'zxcv');
define('DB', 'db_ekspedisi');

$koneksi = mysqli_connect(SERVER, USERNAME, PASSWORD, DB);

if (mysqli_connect_error()) {
   "TERJADI KESALAHAN" . mysqli_error($konek);
   die;
}
