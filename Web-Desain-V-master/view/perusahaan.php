<!-- slider -->
<section class="slider">
   <div class="row justify-content-center">
      <div class="col-lg-12">
         <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="container text-center">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="container">
                        <h1> Kirim Barang Tanpa Khawatir</h1>
                        <p>
                           <h6>Apapun barang yang anda kirim jangan khawatir karena kami akan menjaga
                              barang
                              anda dengan <br>
                              baik
                              dengan layanan cepat sampai aman & terpecaya</h6>
                        </p>
                     </div>

                  </div>
                  <div class="carousel-item">
                     <div class="container">
                        <h1>Kirim Barang Tanpa Khawatir</h1>
                        <p>
                           <h6>Apapun barang yang anda kirim jangan khawatir karena kami akan menjaga
                              barang
                              anda dengan <br>
                              baik
                              dengan layanan cepat sampai aman & terpecaya</h6>
                        </p>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container">
                        <h1>Kirim Barang Tanpa Khawatir</h1>
                        <p>
                           <h6>Apapun barang yang anda kirim jangan khawatir karena kami akan menjaga
                              barang
                              anda dengan <br>
                              baik
                              dengan layanan cepat sampai aman & terpecaya</h6>
                        </p>
                     </div>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
               <span class="carousel-control-prev-icon" aria-hidden="true"></span>
               <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
               <span class="carousel-control-next-icon" aria-hidden="true"></span>
               <span class="sr-only">Next</span>
            </a>
         </div>
      </div>
   </div>
   <div class="visual">
      <img src="./Assets/visual/visual1.png" width="100%" height="auto">
   </div>
</section>
<!-- akhir slider -->

<!-- item -->
<section class="item ">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-lg-3 col-md-5 col-sm-12">
            <div class="produk text-center">
               <img src="./Assets/icon/product.png">
               <p>
                  <h5>Produk</h5>
               </p>
               <p>
                  <h6>Dengan pengalaman selama 28 tahun, syn-cepat melayani kebutuhan pelanggan setianya,
                     dengan jasa pengiriman dalam dan luar negeri. </h6>
               </p>
            </div>
         </div>
         <div class="col-lg-3 col-md-4 col-sm-12">
            <div class="produk text-center">
               <img src="./Assets/icon/ic_public.png">
               <p>
                  <h5>Publikasi</h5>
               </p>
               <p>
                  <h6>Dengan pengalaman selama 28 tahun, syn-cepat melayani kebutuhan pelanggan setianya,
                     dengan jasa pengiriman dalam dan luar negeri. </h6>
               </p>
            </div>
         </div>
         <div class="col-lg-3 col-md-4 col-sm-12">
            <div class="produk text-center">
               <img src="./Assets/icon/ic_event.png">
               <p>
                  <h5>Event</h5>
               </p>
               <p>
                  <h6>Dengan pengalaman selama 28 tahun, syn-cepat melayani kebutuhan pelanggan setianya,
                     dengan jasa pengiriman dalam dan luar negeri. </h6>
               </p>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- akhir item -->

<!-- ongkos kirim -->
<section class="ongkos-kirim">
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <div class="ongkir-konten">
               <div class="container">
                  <div class="row justify-content-center">
                     <div class="col-lg-5 col-md-12 col-sm-12">
                        <h3>Hitung Ongkos Kirim</h3>
                        <p>
                           <h6>Hitung estimasi biaya pengiriman paket anda
                              dengan menginput kota asal, tujuan dan berat barang </h6>
                        </p>
                        <p>
                           <!-- <input class="form-control" type="text" placeholder="Kota Asal"> -->
                           <select name="kotaasal" id="" class="form-control">
                              <?php
                              $query = mysqli_query($koneksi, "SELECT * FROM kota");
                              while ($kota = mysqli_fetch_assoc($query)) { ?>
                                 <option value="<?= $kota['id_kota'] ?>"><?= $kota['kota'] ?></option>
                              <?php } ?>
                           </select>
                        </p>
                        <p>
                           <input class="form-control" type="text" placeholder="Kota Tujuan">
                        </p>
                        <p>
                           <input class="form-control" type="text" placeholder="Berat Barang (grams)">
                        </p>
                        <div class="row text-center">
                           <div class="col-lg-12">
                              <p>
                                 <button type="button" class="btn btn-outline-light">Clear</button>
                                 <a href="./biayaongkir-page.html"><button type="button" class="btn btn-success">Cek Biaya</button></a>
                              </p>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-5 col-md-12  ">
                        <div class="lacak-kiriman">
                           <h3>Lacak Kiriman</h3>
                           <p>
                              <h6>Lacak keberadaan paket anda secara akurat </h6>
                           </p>
                           <p>
                              <input class="form-control" type="text" placeholder="Cek No Resi">
                           </p>
                        </div>
                        <div class="row">
                           <div class="col-lg-12 ">
                              <p>
                                 <img src="./Assets/img/delivery.png" width="100%" height="auto">
                              </p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- akhir ongkos kirim -->

<!-- pilih ekspedisi -->
<section class="ekspedisi">
   <div class="row">
      <div class="col-lg-7 d-lg-block d-none">
         <img src="./Assets/img/img-kurir.png" alt="">
      </div>
      <div class="col-lg-4 col-sm-12">
         <div class="judul-ekspedisi text-center">
            <div class="container">
               <h1>Pilih ekspedisi berkualitas dengan
                  layanan terpercaya</h1>
               <p>
                  <h4> layanan cepat sampai aman & terpecaya</h4>
               </p>
               <hr>
               <a href="./layanan-page.html">
                  <button type="button" class="btn btn-outline-light">Pilih Layanan</button>
               </a>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- akhir pilih ekspedisi -->

<!-- ask ours -->
<section class="ask-ours ">
   <div class="row text-center">
      <div class="container">
         <div class="col-lg-12">
            <div class="ask-ours-content">
               <h1>Ask Ours</h1>
               <h5>Kami selalu siap melayani anda</h5>
            </div>
         </div>
         <div class="row justify-content-center">
            <div class="col-lg-6">
               <p>
                  <input class="form-control" type="text" placeholder="Tanyakan Sesuatu Kepada Kami">
               </p>
            </div>
         </div>
      </div>

   </div>
</section>
<!-- akhir ask ours -->

<!-- Powered by-->
<section class="powered">
   <div class="row text-center">
      <div class="col">
         <div class="powered-content">
            <div class="container">
               <h1> <b>Powered</b> by</h1>
               <hr>
               <div class="col">
                  <div class="img-powered">
                     <img src="./Assets/logo/logo_powered.png">
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- akhir powered by -->