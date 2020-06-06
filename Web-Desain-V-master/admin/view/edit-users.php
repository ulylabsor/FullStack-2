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
               <input type="password" class="form-control" id="password" name="password" placeholder="kosongkan jika tidak ingin mengubah password">
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