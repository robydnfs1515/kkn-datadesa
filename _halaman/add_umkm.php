<?php
//DB connection
require '../_helpers/helper.php';

// pengecekan apakah tombol submit sudah ditekan
if (isset($_POST["submit"])) {
    //cek apakah data berhasil di Tambah atau tidak
    if (tambah_umkm($_POST) > 0) {
        echo "<script>
        alert('Data Berhasil di Tambahkan!');
        document.location.href='umkm.php';
        </script>";
    } else {
        echo "<script>
        alert('Data Gagal di Tambahkan!');
        </script>";
    }
}
include '../_layouts/up.php';
?>

<!-- Page Heading / content -->
<h2>Tambah Data BLT UMKM</h2>
<hr>
<form method="post" action="">
  <div class="mb-3">
    <label for="nama_umkm" class="form-label">Nama</label>
    <input type="text" name="nama_umkm" class="form-control" required>
  </div>
  <div class="mb-3">
    <label for="nonik_umkm" class="form-label">No. Induk Keluarga</label>
    <input type="text" name="nonik_umkm" class="form-control" required>
  </div>
  <div class="mb-3">
    <label for="jumlah_umkm" class="form-label">Jumlah Tunai BLT</label>
    <input type="text" name="jumlah_umkm" class="form-control" required>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>

<?php
include '../_layouts/down.php';
?>