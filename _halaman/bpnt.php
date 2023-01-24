<?php
require '../_helpers/helper.php';
$bpnt = query("SELECT * FROM tb_bpnt");
?>

<?php
include '../_layouts/up.php';
?>

<!-- Page Heading / content -->
<div class="container-fluit mt-3">
  <a class="btn btn-success" href="add_bpnt.php" role="button"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp
    Tambah</a>
  <a class="btn btn-success" href="export_bpnt.php" role="button"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp
    Export Excel</a>
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
foreach ($bpnt as $row): ?>
      <tr>
        <td><?=$i;?></td>
        <td><?=$row["nama_bpnt"];?></td>
        <td><?=$row["nonik_bpnt"];?></td>
        <td><?=$row["jumlah_bpnt"];?></td>
        <td>
          <div>
            <a class="btn btn-info" href="edit_bpnt.php?id=<?=$row["id_bpnt"];?>"><i class="fa fa-pencil"
                aria-hidden="true"></i></a>
            <a class="btn btn-danger" href="delete_bpnt.php?id=<?=$row["id_bpnt"];?>"><i class="fa fa-ban"
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