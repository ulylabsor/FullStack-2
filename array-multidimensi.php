<?php
$mahasiswa = [
   [
      'nim'        => '12345',
      'nama'       => 'Budi',
      'jurusan'    => 'Teknik Komputer',
      'ipk'        => 3.7,
      'pembimbing' => [
         'p1' => "Santoso, M.Kom",
         'p2' => "Ani, ST., M.Kom"
      ],
      'email'      => ['budi@gmail.com', 'budi123@yahoo.com']
   ],
   [
      'nim'        => '54321',
      'nama'       => 'Syaiful',
      'jurusan'    => 'Sistem Informasi',
      'ipk'        => 2.9,
      'pembimbing' => [
         'p1' => "Zailani, M.Kom",
         'p2' => "Ani, ST., M.Kom"
      ],
      'email'      => ['syaiful@gmail.com', 'syaiful123@yahoo.com']
   ],
   [
      'nim'        => '99999',
      'nama'       => 'Maha Dwi Putra',
      'jurusan'    => 'Teknik Komputer',
      'ipk'        => 3.9,
      'pembimbing' => [
         'p1' => "Zailani, M.Kom",
         'p2' => "Ani, ST., M.Kom"
      ],
      'email'      => ['dwi@gmail.com', 'dwi123@yahoo.com']
   ]
];

// var_dump($mahasiswa);
// echo $mahasiswa[0]['pembimbing']['p1']; //Menampilkan Spesifik Data

foreach ($mahasiswa as $mhs) {
   echo $mhs['nama'] . "<br>";
   echo $mhs['jurusan'] . "<br>";
   echo $mhs['ipk'] . "<br>";
   echo $mhs['pembimbing']['p1'] . "<br>";
   echo $mhs['pembimbing']['p2'] . "<br>";
   echo $mhs['email'][0] . "<br>";
   echo $mhs['email'][2] . "<br>";
   echo "<hr>";
}
