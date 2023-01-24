<?php
require '../_helpers/helper.php';
//DB connection
$id = $_GET["id"];

//query data mahasiswa berdasarkan ID!
$upah = query("SELECT * FROM tb_upah WHERE id_upah = $id")[0];

// pengecekan apakah tombol submit sudah ditekan
if (isset($_POST["submit"])) {
    //cek apakah data berhasil di Ubah atau tidak
    if (ubah_upah($_POST) > 0) {
        echo "<script>
        alert('Data Berhasil di Ubah!');
        document.location.href='upah.php';
        </script>";
    } else {
        echo "<script>
        alert('Data Gagal di Ubah!');
        document.location.href='upah.php';
        </script>";
    }
}
include '../_layouts/up.php';
?>

<!-- Page Heading / content -->
<h2>Edit Data BLT Subsidi Upah</h2>
<hr>
<form method="post" action="">
  <input type="hidden" name="id_upah" value="<?=$upah["id_upah"];?>">
  <div class=" mb-3">
    <label for="nama_upah" class="form-label">Nama</label>
    <input type="text" name="nama_upah" class="form-control" value="<?php echo $upah['nama_upah'] ?>">
  </div>
  <div class="mb-3">
    <label for="nonik_upah" class="form-label">No. Induk Keluarga</label>
    <input type="text" name="nonik_upah" class="form-control" value="<?php echo $upah['nonik_upah'] ?>">
  </div>
  <div class="mb-3">
    <label for="jumlah_upah" class="form-label">Jumlah Tunai BLT</label>
    <input type="text" name="jumlah_upah" class="form-control" value="<?php echo $upah['jumlah_upah'] ?>">
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Update Data</button>
</form>

<?php
include '../_layouts/down.php';
?>