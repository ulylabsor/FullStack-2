         <form method="post" action="?page=act-layanan">
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
                        <label for="kode">Kode</label>
                        <input type="text" class="form-control" id="kode" name="kode">
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="form-group">
                        <label for="text">Layanan</label>
                        <input type="text" class="form-control" id="layanan" name="layanan" aria-describedby="layananHelp">
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="text" class="form-control" id="harga" name="harga">
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-4">
                     <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                        <input type="text" class="form-control" id="keterangan" name="keterangan">
                     </div>
                  </div>
               </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
               <button type="submit" name="btn-AddLayanan" class="btn btn-primary">Save changes</button>
            </div>
         </form>