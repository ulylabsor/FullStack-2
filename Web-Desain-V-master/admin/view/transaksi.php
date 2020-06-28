<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
   <h1 class="h2">Data Transaksi &nbsp;
      <a href="?page=add-transaksi" class="btn btn-info"><i class="fa fa-plus"></i> Tambah Data</a>
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
   <table class="table table-striped table-sm" id="myTable">
      <thead>
         <tr>
            <th>#</th>
            <th>Kode</th>
            <th>Pengirim</th>
            <th>Penerima</th>
            <th>Barang</th>
            <th>Layanan</th>
            <th>Asal</th>
            <th>Tujuan</th>
            <th>Aksi</th>
         </tr>
      </thead>
      <tbody>
         <?php $no = 1 ?>
         <?php foreach (getTransaksi() as $data) : ?>
            <tr>
               <td><?= $no++ ?></td>
               <td><?= $data['kd_transaksi'] ?></td>
               <td><?= $data['nama_pengirim'] ?></td>
               <td><?= $data['nama_penerima'] ?></td>
               <td><?= $data['nama_barang'] ?></td>
               <td><?= $data['layanan'] ?></td>
               <td><?= $data['kotaAsal'] ?></td>
               <td><?= $data['kotaTujuan'] ?></td>
               <td>
                  <!-- TOMBOL EDIT -->
                  <a href="?page=edit-transaksi&id=<?= $data['kd_transaksi'] ?>" title="Edit Data <?= $data['kd_transaksi'] ?>"><i class="fa fa-edit text-info"></i></a> &nbsp;

                  <!-- TOMBOL DELETE -->
                  <a href="?page=act-transksi&aksi=delete&id=<?= $data['kd_transaksi'] ?>" onclick="return confirm('Yakin ingin menghapus data <?= $data['kd_transaksi'] ?> ?')" title="Hapus Data <?= $data['kd_transaksi'] ?>"><i class="fa fa-trash text-danger"></i></a>
               </td>
            </tr>
         <?php endforeach ?>
      </tbody>
   </table>
</div>