<?php
//DB connection
require '../_helpers/helper.php';

// pengecekan apakah tombol submit sudah ditekan
if (isset($_POST["submit"])) {
    //cek apakah data berhasil di Tambah atau tidak
    if (tambah_bbm($_POST) > 0) {
        echo "<script>
        alert('Data Berhasil di Tambahkan!');
        document.location.href='bbm.php';
        </script>";
    } else {
        echo "<script>
        alert('Data Gagal di Tambahkan!');
        document.location.href='bbms.php';
        </script>";
    }
}
include '../_layouts/up.php';
?>

<!-- Page Heading / content -->
<h2>Tambah Data BLT BBM</h2>
<hr>
<form method="post" action="">
  <div class="mb-3">
    <label for="nama_bbm" class="form-label">Nama</label>
    <input type="text" name="nama_bbm" class="form-control">
  </div>
  <div class="mb-3">
    <label for="nonik_bbm" class="form-label">No. Induk Keluarga</label>
    <input type="text" name="nonik_bbm" class="form-control">
  </div>
  <div class="mb-3">
    <label for="jumlah_bbm" class="form-label">Jumlah Tunai BLT BBM</label>
    <input type="text" name="jumlah_bbm" class="form-control">
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>

<?php
include '../_layouts/down.php';
?>