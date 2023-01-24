<?php
//DB connection
require '../_helpers/helper.php';

// pengecekan apakah tombol submit sudah ditekan
if (isset($_POST["submit"])) {
    //cek apakah data berhasil di Tambah atau tidak
    if (tambah_pkp($_POST) > 0) {
        echo "<script>
        alert('Data Berhasil di Tambahkan!');
        document.location.href='pkp.php';
        </script>";
    } else {
        echo "<script>
        alert('Data Gagal di Tambahkan!');
        document.location.href='pkp.php';
        </script>";
    }
}
include '../_layouts/up.php';
?>

<!-- Page Heading / content -->
<h2>Tambah Data Progran Kerja Prakerja</h2>
<hr>
<form method="post" action="">
  <div class="mb-3">
    <label for="nama_pkp" class="form-label">Nama</label>
    <input type="text" name="nama_pkp" class="form-control">
  </div>
  <div class="mb-3">
    <label for="nonik_pkp" class="form-label">No. Induk Keluarga</label>
    <input type="text" name="nonik_pkp" class="form-control">
  </div>
  <div class="mb-3">
    <label for="jumlah_pkp" class="form-label">Jumlah Tunai Progran Kerja Prakerja</label>
    <input type="text" name="jumlah_pkp" class="form-control">
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>

<?php
include '../_layouts/down.php';
?>