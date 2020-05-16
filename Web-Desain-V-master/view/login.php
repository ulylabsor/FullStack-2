<?php
if (isset($_SESSION['idRole'])) {
   if ($_SESSION['idRole'] == 3) {
      header("Location: index.php");
   } else {
      header("Location: admin");
   }
}

?>
<section class="judul-biaya-ongkir">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-lg-6">
            <form class="form-signin" method="post" action="?page=act-login">
               <img class="mb-4" src="/docs/4.5/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
               <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
               <div class="form-group">
                  <label for="inputEmail" class="sr-only">Email address</label>
                  <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus>
               </div>
               <div class="form-group">
                  <label for="inputPassword" class="sr-only">Password</label>
                  <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
               </div>
               <div class="checkbox mb-3">
                  <label>
                     <input type="checkbox" value="remember-me"> Remember me
                  </label>
               </div>
               <button class="btn btn-lg btn-success btn-block" type="submit" name="btnLogin">Sign in</button>
               <p class="mt-5 mb-3 text-muted">&copy; 2017-2020</p>
            </form>
         </div>
      </div>
   </div>
</section>