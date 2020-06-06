<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
   <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Data Users &nbsp;
         <a href="#" class="btn btn-info" data-toggle="modal" data-target="#modalAddUsers"><i class="fa fa-plus"></i> Tambah Data</a>
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

   <div class="table-responsive">
      <table class="table table-striped table-sm">
         <thead>
            <tr>
               <th>#</th>
               <th>Username</th>
               <th>Nama Lengkap</th>
               <th>Email</th>
               <th>Status</th>
               <th>Last Login</th>
               <th>Role</th>
               <th>Aksi</th>
            </tr>
         </thead>
         <tbody>
            <?php $no = 1 ?>
            <?php foreach (dataUsers() as $user) : ?>
               <tr>
                  <td><?= $no++ ?></td>
                  <td><?= $user['username'] ?></td>
                  <td><?= $user['nama_depan'] . ' ' . $user['nama_belakang'] ?></td>
                  <td><?= $user['email'] ?></td>
                  <td><?= $user['aktif'] == 'Y' ? 'Aktif' : 'Tidak aktif' ?></td>
                  <td><?= $user['login_at'] ?></td>
                  <td><?= $user['role'] ?></td>
                  <td>
                     <!-- TOMBOL EDIT -->
                     <a href="?page=users&aksi=edit&id=<?= $user['id_user'] ?>" title="Edit Data <?= $user['username'] ?>"><i class="fa fa-edit text-info"></i></a> &nbsp;

                     <!-- TOMBOL DELETE -->
                     <a href="?page=act-users&aksi=delete&id=<?= $user['id_user'] ?>" onclick="return confirm('Yakin ingin menghapus data <?= $user['username'] ?> ?')" title="Hapus Data <?= $user['username'] ?>"><i class="fa fa-trash text-danger"></i></a>
                  </td>
               </tr>
            <?php endforeach ?>
         </tbody>
      </table>
   </div>

   <!-- FORM EDIT USERS -->
   <?php
   if (isset($_GET['aksi'])) {
      if ($_GET['aksi'] == 'edit') {
         $iduser = $_GET['id'];
         $data = dataUsersById($iduser); ?>
         <form method="post" action="?page=act-users&aksi=edit&id=<?= $iduser ?>">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Ubah Data Users</h5>
               <a href="?page=users" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </a>
            </div>
            <div class="modal-body">
               <input type="text" hidden id="idUser" name="idUser" value="<?= $data['id_user'] ?>">
               <div class="row">
                  <div class="col-md-4">
                     <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" value="<?= $data['username'] ?>">
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" value="<?= $data['email'] ?>" aria-describedby="emailHelp">
                        <small id="emailHelp" class="form-text text-muted">Harus sesuai format email.</small>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-4">
                     <div class="form-group">
                        <label for="namaDepan">Nama Depan</label>
                        <input type="text" class="form-control" id="namaDepan" value="<?= $data['nama_depan'] ?>" name="namaDepan">
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="form-group">
                        <label for="namaBelakang">Nama Belakang</label>
                        <input type="text" class="form-control" id="namaBelakang" value="<?= $data['nama_belakang'] ?>" name="namaBelakang">
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="form-group">
                        <label for="role">Sebagai</label>
                        <select class="form-control" id="role" name="role">
                           <?php foreach (dataRole() as $role) : ?>
                              <option value="<?= $role['id_role'] ?>" <?= $data['id_role'] == $role['id_role'] ? 'selected' : '' ?>><?= $role['role'] ?></option>
                           <?php endforeach ?>
                        </select>
                     </div>
                  </div>
               </div>
               <div class="form-group form-check">
                  <input type="checkbox" class="form-check-input" id="status" name="status" <?= $data['aktif'] == 'Y' ? 'checked' : '' ?>>
                  <label class="form-check-label" for="status">Aktif</label>
               </div>
            </div>
            <div class="modal-footer">
               <button type="submit" name="btn-EditUsers" class="btn btn-primary">Save changes</button>
            </div>
         </form>
   <?php
      }
   }
   ?>
</main>

<!-- Modal Tambah Users -->
<div class="modal fade" id="modalAddUsers" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
         <form method="post" action="?page=act-users">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Tambah Users</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               <div class="row">
                  <div class="col-md-4">
                     <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username">
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                        <small id="emailHelp" class="form-text text-muted">Harus sesuai format email.</small>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-4">
                     <div class="form-group">
                        <label for="namaDepan">Nama Depan</label>
                        <input type="text" class="form-control" id="namaDepan" name="namaDepan">
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="form-group">
                        <label for="namaBelakang">Nama Belakang</label>
                        <input type="text" class="form-control" id="namaBelakang" name="namaBelakang">
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="form-group">
                        <label for="role">Sebagai</label>
                        <select class="form-control" id="role" name="role">
                           <?php foreach (dataRole() as $role) : ?>
                              <option value="<?= $role['id_role'] ?>"><?= $role['role'] ?></option>
                           <?php endforeach ?>
                        </select>
                     </div>
                  </div>
               </div>
               <div class="form-group form-check">
                  <input type="checkbox" class="form-check-input" id="status" name="status">
                  <label class="form-check-label" for="status">Aktif</label>
               </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
               <button type="submit" name="btn-AddUsers" class="btn btn-primary">Save changes</button>
            </div>
         </form>
      </div>
   </div>
</div>