<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
   <h1 class="h2">Data Layanan &nbsp;
      <a href="?page=add-layanan" class="btn btn-info"><i class="fa fa-plus"></i> Tambah Data</a>
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
            <th>Layanan</th>
            <th>Harga</th>
            <th>Keterangan</th>
            <th>Aksi</th>
         </tr>
      </thead>
      <tbody>
         <?php $no = 1 ?>
         <?php foreach (dataLayanan() as $layanan) : ?>
            <tr>
               <td><?= $no++ ?></td>
               <td><?= $layanan['kd_layanan'] ?></td>
               <td><?= $layanan['layanan']  ?></td>
               <td>Rp. <?= number_format($layanan['harga'], 0, ',', '.') ?></td>
               <td title="<?= $layanan['keterangan'] ?>"><?= substr($layanan['keterangan'], 0, 50) ?> ...</td>
               <td>
                  <!-- TOMBOL EDIT -->
                  <a href="?page=edit-layanan&id=<?= $layanan['kd_layanan'] ?>" title="Edit Data <?= $layanan['layanan'] ?>"><i class="fa fa-edit text-info"></i></a> &nbsp;

                  <!-- TOMBOL DELETE -->
                  <a href="?page=act-layanan&aksi=delete&id=<?= $layanan['kd_layanan'] ?>" onclick="return confirm('Yakin ingin menghapus data <?= $layanan['layanan'] ?> ?')" title="Hapus Data <?= $layanan['layanan'] ?>"><i class="fa fa-trash text-danger"></i></a>
               </td>
            </tr>
         <?php endforeach ?>
      </tbody>
   </table>
</div>