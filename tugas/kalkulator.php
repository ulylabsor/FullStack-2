<!-- METHOD POST -->
<h3>Method POST</h3>
<form method="POST" action="">
   <label for="angka1">Angka 1</label>
   <input type="text" id="angka1" name="angka1">

   <select name="operator">
      <option value="+">+</option>
      <option value="-">-</option>
      <option value="*">*</option>
      <option value="/">/</option>
   </select>

   <label for="angka2">Angka 2</label>
   <input type="text" id="angka2" name="angka2">

   <button type="submit" name="proses">Proses</button>
</form>

<!-- PROSESNYA -->
<?php
if (isset($_POST['proses'])) {
   $angka1   = $_POST['angka1'];
   $angka2 = $_POST['angka2'];
   $operator = $_POST['operator'];

   if ($operator == '+') {
      $hasil = $angka1 + $angka2;
   } else if ($operator == '-') {
      $hasil = $angka1 - $angka2;
   } else if ($operator == '*') {
      $hasil = $angka1 * $angka2;
   } else if ($operator == '/') {
      $hasil = $angka1 / $angka2;
   }
   echo "Hasil = " . $hasil;
}
?>