<!-- judul layanan -->
<section class="judul-layanan text-center">
   <div class="container">
      <div class="row justify-content-center ">
         <div class="col-lg-9">
            <h1>Layanan Yang Menyesuaikan Segala Kebutuhan Anda</h1>
            <p>
               <hr>
            </p>
            <p>
               <h6>Divisi Ekspres Syn-Cepat melayani kiriman paket dan dokumen peka waktu tujuan dalam negeri
                  melalui lebih dari 1,500 titik layanan eksklusif dari penjemputan hingga pengantaran yang
                  tersebar
                  di seluruh Indonesia. </h6>
            </p>
         </div>
      </div>
   </div>
</section>
<!-- akhir judul layanan -->

<!-- layanan kami -->
<section class="layanan-kami">
   <div class="container">
      <div class="row justify-content-center">
         <?php foreach ($dataLayanan as $data) : ?>
            <div class="col-lg-4 col-sm-4">
               <div class="kategori-layanan text-center">
                  <img src="./Assets/icon/ic_car.png">
                  <h5><?php echo $data['layanan'] ?></h5>
                  <p>
                     <h6><?php echo $data['keterangan'] ?></h6>
                  </p>
                  <div class="tombol">
                     <a href="?page=layanan-<?php echo strtolower($data['layanan']) ?>">
                        <button type="button" class="btn btn-outline-dark">Pilih Layanan</button>
                     </a>
                  </div>
               </div>
            </div>
         <?php endforeach ?>
      </div>
   </div>
</section>
<!-- akhir layanan kami -->

<!-- judul apa kata mereka -->
<section class="judul-apa-kata-mereka">
   <div class="container">
      <div class="row text-center">
         <div class="col">
            <h2> <b> Apa Kata Mereka</b> <br>
               Tentang Kami</h2>
            <hr style="width: 80px; border-width: 3px; border-color: black">
         </div>
      </div>
   </div>
</section>
<!-- akhir judul apa kata mereka -->

<!-- ulasan & rating -->
<section class="ulasan-rating">
   <div class="container">
      <div class="row">
         <div class="col-lg-5">
            <h6>kami sudah menggunakan jasa syn cepat sejak pertama kami memulai bisnis kami 2019 ,
               hingga saat ini kami bisa lebih luas lagi menjangkau ke daerah seluruh wilayah indonesia </h6>
            <hr>
            <h6><b>Yudies Company</b></h6>
            <p>
               <img src="./Assets/icon/ic_star.png" alt="">
               <img src="./Assets/icon/ic_star.png" alt="">
               <img src="./Assets/icon/ic_star.png" alt="">
               <img src="./Assets/icon/ic_star.png" alt="">
               <img src="./Assets/icon/ic_star.png" alt="">
            </p>
            <p>
               <a href="?page=ulasan">
                  <button type="button" class="btn btn-success">Berikan Rating & Ulasan</button>
               </a>
            </p>
         </div>
         <div class="col-lg-3">
            <div class="rating text-center">
               <h1>4.8</h1>
               <p>
                  <h6>Widi Saputra</h6>
               </p>
               <p>
                  <img src="./Assets/icon/ic_star.png" alt="">
                  <img src="./Assets/icon/ic_star.png" alt="">
                  <img src="./Assets/icon/ic_star.png" alt="">
                  <img src="./Assets/icon/ic_star.png" alt="">
                  <img src="./Assets/icon/ic_star.png" alt="">
               </p>
            </div>
         </div>
         <div class="col-lg-3">
            <div class="rating text-center">
               <h1>4.9</h1>
               <p>
                  <h6>Arya</h6>
               </p>
               <p>
                  <img src="./Assets/icon/ic_star.png" alt="">
                  <img src="./Assets/icon/ic_star.png" alt="">
                  <img src="./Assets/icon/ic_star.png" alt="">
                  <img src="./Assets/icon/ic_star.png" alt="">
                  <img src="./Assets/icon/ic_star.png" alt="">
               </p>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- akhir ulasan & ratings -->