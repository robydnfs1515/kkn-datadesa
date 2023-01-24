<?php
require '../_helpers/helper.php';
$upah = query("SELECT * FROM tb_upah");
?>

<?php
include '../_layouts/up.php';
?>

<!-- Page Heading / content -->
<div class="container-fluit mt-3">
  <a class="btn btn-success" href="add_upah.php" role="button"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp
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
foreach ($upah as $row): ?>
      <tr>
        <td><?=$i;?></td>
        <td><?=$row["nama_upah"];?></td>
        <td><?=$row["nonik_upah"];?></td>
        <td><?=$row["jumlah_upah"];?></td>
        <td>
          <div>
            <a href="edit_upah.php?id=<?=$row["id_upah"];?>" class="btn btn-info"><i class="fa fa-pencil"
                aria-hidden="true"></i></a>
            <a href="delete_upah.php?id=<?=$row["id_upah"];?>" class="btn btn-danger"><i class="fa fa-ban"
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