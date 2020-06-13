 <?php
   $data = dataUsersById($_SESSION['idUser']);
   ?>
 <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Ubah Profil &nbsp;
    </h1>
    <div class="btn-toolbar mb-2 mb-md-0">
       <div class="btn-group mr-2">
          <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
          <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
       </div>
    </div>
 </div>

 <?=
      (isset($_SESSION['notif'])) ? $_SESSION['notif'] : '';
   unset($_SESSION['notif'])
   ?>

 <div class="row">
    <div class="col-sm-3">
       <form class="form" action="?page=act-profil" method="post" enctype="multipart/form-data">
          <!--left col-->
          <div class="text-center">
             <img src="assets/img/<?= $data['foto'] ?>" class="avatar img-circle img-thumbnail" alt="avatar">
             <h6>Upload a different photo...</h6>
             <input type="file" name="fotoProfil" class="text-center center-block file-upload">
          </div>
          </hr><br>
          <div class="panel panel-default">
             <div class="panel-heading">Website <i class="fa fa-link fa-1x"></i></div>
             <div class="panel-body"><a href="http://bootnipets.com">bootnipets.com</a></div>
          </div>

          <ul class="list-group">
             <li class="list-group-item text-muted">Activity <i class="fa fa-dashboard fa-1x"></i></li>
             <li class="list-group-item text-right"><span class="pull-left"><strong>Shares</strong></span> 125</li>
             <li class="list-group-item text-right"><span class="pull-left"><strong>Likes</strong></span> 13</li>
             <li class="list-group-item text-right"><span class="pull-left"><strong>Posts</strong></span> 37</li>
             <li class="list-group-item text-right"><span class="pull-left"><strong>Followers</strong></span> 78</li>
          </ul>

          <div class="panel panel-default">
             <div class="panel-heading">Social Media</div>
             <div class="panel-body">
                <i class="fa fa-facebook fa-2x"></i> <i class="fa fa-github fa-2x"></i> <i class="fa fa-twitter fa-2x"></i> <i class="fa fa-pinterest fa-2x"></i> <i class="fa fa-google-plus fa-2x"></i>
             </div>
          </div>

    </div>
    <!--/col-3-->
    <div class="col-sm-9">
       <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
             <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
          </li>
          <li class="nav-item" role="presentation">
             <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Ubah Password</a>
          </li>
       </ul>

       <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
             <br>
             <div class="form-group">
                <div class="col-xs-6">
                   <label for="namaDepan">Nama Depan</label>
                   <input type="text" class="form-control" name="namaDepan" id="namaDepan" placeholder="Nama Depan" title="enter your first name if any." value="<?= $data['nama_depan'] ?>">
                </div>
             </div>
             <div class="form-group">
                <div class="col-xs-6">
                   <label for="namaBelakang">Nama Belakang</label>
                   <input type="text" class="form-control" name="namaBelakang" id="namaBelakang" placeholder="Nama Belakang" title="enter your last name if any." value="<?= $data['nama_belakang'] ?>">
                </div>
             </div>
             <div class="form-group">
                <div class="col-xs-6">
                   <input type="radio" name="jk" id="pria" value="Pria" <?= $data['jk'] == 'Pria' ? 'checked' : '' ?>>
                   <label for="pria">Pria</label> &nbsp;&nbsp;&nbsp;
                   <input type="radio" name="jk" id="wanita" value="Wanita" <?= $data['jk'] == 'Wanita' ? 'checked' : '' ?>>
                   <label for="wanita">Wanita</label>
                </div>
             </div>
             <div class="form-group">
                <div class="col-xs-6">
                   <label for="tglLahir">Tanggal Lahir</label>
                   <input type="date" class="form-control" name="tglLahir" id="tglLahir" placeholder="dd/mm/yy" title="enter your birthday." value="<?= $data['tgl_lahir'] ?>">
                </div>
             </div>

             <div class="form-group">
                <div class="col-xs-6">
                   <label for="noTelp">No. Telepon</label>
                   <input type="text" class="form-control" name="noTelp" id="noTelp" placeholder="enter phone" title="enter your phone number if any." value="<?= $data['kontak'] ?>">
                </div>
             </div>

             <div class="form-group">
                <div class="col-xs-6">
                   <label for="alamat">Alamat</label>
                   <textarea name="alamat" id="alamat" class="form-control">
                         <?= $data['alamat'] ?>
                      </textarea>
                </div>
             </div>

             <div class="form-group">
                <div class="col-xs-12">
                   <br>
                   <button class="btn btn-lg btn-success" type="submit" name="ubahProfil"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                   <button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
                </div>
             </div>
             </form>
          </div>

          <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
             <br>
             <form action="?page=act-profil" method="post">
                <div class="form-group">
                   <div class="col-xs-6">
                      <label for="username">Username</label>
                      <input type="text" class="form-control" name="username" id="username" placeholder="Enter your username" value="<?= $data['username'] ?>" title="enter your username">
                   </div>
                </div>
                <div class="form-group">
                   <div class="col-xs-6">
                      <label for="email">Email</label>
                      <input type="email" class="form-control" name="email" id="email" placeholder="you@email.com" value="<?= $data['email'] ?>" title="enter your email.">
                   </div>
                </div>
                <div class="form-group">
                   <div class="col-xs-6">
                      <label for="passwordLama">Password Lama</label>
                      <input type="password" class="form-control" name="passwordLama" id="passwordLama" placeholder="password Lama" title="enter your old password.">
                   </div>
                </div>

                <div class="form-group">
                   <div class="col-xs-6">
                      <label for="passwordBaru">Password Baru</label>
                      <input type="password" class="form-control" name="passwordBaru" id="passwordBaru" placeholder="password Baru" title="Enter your new password.">
                   </div>
                </div>
                <div class="form-group">
                   <div class="col-xs-6">
                      <label for="passwordBaru">Ulangi Password Baru</label>
                      <input type="password" class="form-control" name="passwordBaru2" id="passwordBaru2" placeholder="Enter new password again" title="Enter your new password again.">
                   </div>
                </div>
                <div class="form-group">
                   <div class="col-xs-12">
                      <br>
                      <button class="btn btn-lg btn-success" type="submit" name="ubahPassword"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                      <button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
                   </div>
                </div>
             </form>
          </div>
       </div>

    </div>
    <!--/col-9-->
 </div>
 <!--/row-->