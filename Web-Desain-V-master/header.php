<!-- Header -->
<section class="header fixed-top    ">
   <div class="container">
      <div class="row">
         <div class="col">
            <nav class="navbar navbar-expand-lg navbar-dark">
               <a class="navbar-brand" href="#"><img src="./Assets/logo/logo syn cepat.png"></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                  <div class="navbar-nav">
                     <a class="nav-item nav-link active" href="?page=perusahaan">Perusahaan <span class="sr-only">(current)</span></a>
                     <a class="nav-item nav-link active" href="?page=layanan">Produk & Layanan</a>
                     <a class="nav-item nav-link active" href="#">Mitra</a>
                     <a class="nav-item nav-link active" href="#">Karir</a>
                     <a class="nav-item nav-link active" href="#">Hubungi Kami</a>
                     <?php
                     if (isset($_SESSION['username'])) : ?>
                        <a class="nav-item nav-link active" href="#"><?= $_SESSION['username'] ?></a>
                        <a class="nav-item nav-link active" href="?page=act-logout">Logout</a>
                     <?php else : ?>
                        <a class="nav-item nav-link active" href="?page=login">Login</a>
                     <?php endif ?>
                  </div>
               </div>
            </nav>
         </div>
      </div>
   </div>
</section>
<!-- Akhir dari Header -->