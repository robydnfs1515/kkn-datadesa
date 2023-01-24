<?php
//DB connection
require '../_helpers/helper.php';

// pengecekan apakah tombol submit sudah ditekan
if (isset($_POST["submit"])) {
    //cek apakah data berhasil di Tambah atau tidak
    if (tambah_bpnt($_POST) > 0) {
        echo "<script>
        alert('Data Berhasil di Tambahkan!');
        document.location.href='bpnt.php';
        </script>";
    } else {
        echo "<script>
        alert('Data Gagal di Tambahkan!');
        document.location.href='bpnt.php';
        </script>";
    }
}
include '../_layouts/up.php';
?>

<!-- Page Heading / content -->
<h2>Tambah Data Bantuan Pokok Non Tunai (BPNT) </h2>
<hr>
<form method="post" action="">
  <div class="mb-3">
    <label for="nama_bpnt" class="form-label">Nama</label>
    <input type="text" name="nama_bpnt" class="form-control">
  </div>
  <div class="mb-3">
    <label for="nonik_bpnt" class="form-label">No. Induk Keluarga</label>
    <input type="text" name="nonik_bpnt" class="form-control">
  </div>
  <div class="mb-3">
    <label for="jumlah_bpnt" class="form-label">Jumlah Tunai BLT bpnt</label>
    <input type="text" name="jumlah_bpnt" class="form-control">
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>

<?php
include '../_layouts/down.php';
?>