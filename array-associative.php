<?php
//ARRAY ASSOCIATIVE
$profil = array(
   'nama'     => "Budi Santoso",
   'tglLahir' => "12/02/1993",
   'jk'       => "Pria",
   'lajang'   => false,
   'goldarah' => 'O',
   'umur'     => 28
);

// echo $profil['nama'];
?>
<table border="1">
   <tr>
      <th align="left">Nama</th>
      <td><?= $profil['nama'] ?></td>
   </tr>
   <tr>
      <th align="left">Tanggal Lahir</th>
      <td><?= $profil['tglLahir'] ?></td>
   </tr>
   <tr>
      <th align="left">Jenis Kelamin</th>
      <td><?= $profil['jk'] ?></td>
   </tr>
   <tr>
      <th align="left">Status</th>
      <td><?= $profil['lajang'] == 1 ? "Lajang" : "Menikah" ?></td>
   </tr>
   <tr>
      <th align="left">Golongan Darah</th>
      <td><?= $profil['goldarah'] ?></td>
   </tr>
   <tr>
      <th align="left">Umur</th>
      <td><?= $profil['umur'] ?></td>
   </tr>
</table>