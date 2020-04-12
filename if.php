<?php
$nTugas = 100;
$nUjian = 100;

$nAkhir = ($nTugas + $nUjian) / 2;

echo $nAkhir;
echo "<br>";
if ($nAkhir >= 80 and $nAkhir <= 100) {
   echo "LULUS TERBAIK";
} else if ($nAkhir >= 60 and $nAkhir < 80) {
   echo "LULUS";
} else if ($nAkhir >= 50 and $nAkhir < 60) {
   echo "CUKUP";
} else if ($nAkhir >= 0 and $nAkhir < 50) {
   echo "GAGAL";
} else if ($nAkhir < 0) {
   echo "Nilai kurang dari 0. Silakan cek kembali";
} else {
   echo "NIlai anda tidak terdefinisi karena melebihi ambang batas";
}
