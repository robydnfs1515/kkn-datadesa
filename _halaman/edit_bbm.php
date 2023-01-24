<?php
//DB connection
require '../_helpers/helper.php';

//DB connection
$id = $_GET["id"];

//query data mahasiswa berdasarkan ID!
$bbm = query("SELECT * FROM tb_bbm WHERE id_bbm = $id")[0];

// pengecekan apakah tombol submit sudah ditekan
if (isset($_POST["submit"])) {
    //cek apakah data berhasil di Tambah atau tidak
    if (ubah_bbm($_POST) > 0) {
        echo "<script>
        alert('Data Berhasil di Ubah!');
        document.location.href='bbm.php';
        </script>";
    } else {
        echo "<script>
        alert('Data Gagal di Ubah!');
        document.location.href='bbm.php';
        </script>";
    }
}
include '../_layouts/up.php';
?>

<!-- Page Heading / content -->
<h2>Edit Data BLT BBM</h2>
<hr>
<form method="post" action="">
  <input type="hidden" name="id_bbm" value="<?=$bbm["id_bbm"];?>">
  <div class="mb-3">
    <label for="nama_bbm" class="form-label">Nama</label>
    <input type="text" name="nama_bbm" class="form-control" value="<?php echo $bbm['nama_bbm'] ?>">
  </div>
  <div class="mb-3">
    <label for="nonik_bbm" class="form-label">No. Induk Keluarga</label>
    <input type="text" name="nonik_bbm" class="form-control" value="<?php echo $bbm['nonik_bbm'] ?>">
  </div>
  <div class="mb-3">
    <label for="jumlah_bbm" class="form-label">Jumlah Tunai BLT BBM</label>
    <input type="text" name="jumlah_bbm" class="form-control" value="<?php echo $bbm['jumlah_bbm'] ?>">
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>

<?php
include '../_layouts/down.php';
?>