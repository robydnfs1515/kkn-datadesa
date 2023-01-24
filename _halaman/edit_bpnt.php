<?php
//DB connection
require '../_helpers/helper.php';

//DB connection
$id = $_GET["id"];

//query data mahasiswa berdasarkan ID!
$bpnt = query("SELECT * FROM tb_bpnt WHERE id_bpnt = $id")[0];

// pengecekan apakah tombol submit sudah ditekan
if (isset($_POST["submit"])) {
    //cek apakah data berhasil di Tambah atau tidak
    if (ubah_bpnt($_POST) > 0) {
        echo "<script>
        alert('Data Berhasil di Ubah!');
        document.location.href='bpnt.php';
        </script>";
    } else {
        echo "<script>
        alert('Data Gagal di Ubah!');
        document.location.href='bpnt.php';
        </script>";
    }
}
include '../_layouts/up.php';
?>

<!-- Page Heading / content -->
<h2>Edit Data Bantuan Pokok Non Tunai (BPNT)</h2>
<hr>
<form method="post" action="">
  <input type="hidden" name="id_bpnt" value="<?=$bpnt["id_bpnt"];?>">
  <div class="mb-3">
    <label for="nama_bpnt" class="form-label">Nama</label>
    <input type="text" name="nama_bpnt" class="form-control" value="<?php echo $bpnt['nama_bpnt'] ?>">
  </div>
  <div class="mb-3">
    <label for="nonik_bpnt" class="form-label">No. Induk Keluarga</label>
    <input type="text" name="nonik_bpnt" class="form-control" value="<?php echo $bpnt['nonik_bpnt'] ?>">
  </div>
  <div class="mb-3">
    <label for="jumlah_bpnt" class="form-label">Jumlah Tunai BLT bpnt</label>
    <input type="text" name="jumlah_bpnt" class="form-control" value="<?php echo $bpnt['jumlah_bpnt'] ?>">
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>

<?php
include '../_layouts/down.php';
?>