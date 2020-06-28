<?php
$awal = 10;
while ($awal >= 1) {
   echo $awal--;
   echo "<br>";
}

header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data Pegawai.xls");
