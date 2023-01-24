<?php
require '../_helpers/helper.php';
$umkm = query("SELECT * FROM tb_umkm");
?>


<?php
include '../_layouts/up.php';
?>

<!-- Page Heading / content -->
<div class="container-fluit mt-3">
  <div class="container-fluit mt-3">
    <a class="btn btn-success" href="add_umkm.php" role="button"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp
      Tambah</a>
    <table class="table table-hover mt-3">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>No. Induk Keluarga</th>
          <th>Jumlah Upah</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php
$i = 1;
foreach ($umkm as $row): ?>
        <tr>
          <td><?=$i;?></td>
          <td><?=$row["nama_umkm"];?></td>
          <td><?=$row["nonik_umkm"];?></td>
          <td><?=$row["jumlah_umkm"];?></td>
          <td>
            <div>
              <a class="btn btn-info" href="edit_umkm.php?id=<?=$row["id_umkm"];?>"><i class="fa fa-pencil"
                  aria-hidden="true"></i></a>
              <a class="btn btn-danger" href="delete_umkm.php?id=<?=$row["id_umkm"];?>"><i class="fa fa-ban"
                  aria-hidden="true"></i></a>
            </div>
          </td>
        </tr>
        <?php
$i++;
endforeach;?>
      </tbody>
    </table>
  </div>

  <?php
include '../_layouts/down.php';
?>