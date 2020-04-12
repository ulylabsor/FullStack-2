<?php
$tanggal = date("Y");
$kabisat = ($tanggal % 4 == 0) ? "Sekarang Tahun Kabisat" : "Bukan tahun kabisat";
echo $kabisat;
