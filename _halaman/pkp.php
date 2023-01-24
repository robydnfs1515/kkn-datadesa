<?php
require '../_helpers/helper.php';
$pkp = query("SELECT * FROM tb_pkp");
?>


<?php
include '../_layouts/up.php';
?>

<!-- Page Heading / content -->
<div class="container-fluit mt-3">
  <div class="container-fluit mt-3">
    <a class="btn btn-success" href="add_pkp.php" role="button"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp
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
foreach ($pkp as $row): ?>
        <tr>
          <td><?=$i;?></td>
          <td><?=$row["nama_pkp"];?></td>
          <td><?=$row["nonik_pkp"];?></td>
          <td><?=$row["jumlah_pkp"];?></td>
          <td>
            <div>
              <a class="btn btn-info" href="edit_pkp.php?id=<?=$row["id_pkp"];?>"><i class="fa fa-pencil"
                  aria-hidden="true"></i></a>
              <a class="btn btn-danger" href="delete_pkp.php?id=<?=$row["id_pkp"];?>"><i class="fa fa-ban"
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