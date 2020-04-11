<!-- METHOD POST -->
<h3>Method POST</h3>
<form method="POST" action="">
   <label for="nama">Nama Anda</label>
   <input type="text" id="nama" name="nama">

   <label for="alamat">Alamat</label>
   <input type="text" id="alamat" name="alamat">

   <button type="submit" name="btnSimpanPOST">Proses</button>
</form>

<!-- PROSESNYA -->
<?php
if (isset($_POST['btnSimpanPOST'])) {
   $nama   = $_POST['nama'];
   $alamat = $_POST['alamat'];

   echo "Nama Anda " . $nama . " Alamat anda " . $alamat;
}
?>

<!-- METHOD GET -->
<h3>Method GET</h3>
<form method="GET" action="">
   <label for="nama">Nama Anda</label>
   <input type="text" id="nama" name="nama">

   <label for="alamat">Alamat</label>
   <input type="text" id="alamat" name="alamat">

   <button type="submit" name="btnSimpanGET">Proses</button>
</form>

<!-- PROSESNYA -->
<?php
if (isset($_GET['btnSimpanGET'])) {
   $nama   = $_GET['nama'];
   $alamat = $_GET['alamat'];

   echo "Nama Anda " . $nama . " Alamat anda " . $alamat;
}
?>