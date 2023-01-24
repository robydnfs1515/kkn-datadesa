<?php
//DB connection
require '../_helpers/helper.php';

//DB connection
$id = $_GET["id"];

//query data mahasiswa berdasarkan ID!
$umkm = query("SELECT * FROM tb_umkm WHERE id_umkm = $id")[0];

// pengecekan apakah tombol submit sudah ditekan
if (isset($_POST["submit"])) {
    //cek apakah data berhasil di Tambah atau tidak
    if (ubah_umkm($_POST) > 0) {
        echo "<script>
        alert('Data Berhasil di Ubah!');
        document.location.href='umkm.php';
        </script>";
    } else {
        echo "<script>
        alert('Data Gagal di Ubah!');
        document.location.href='umkm.php';
        </script>";
    }
}
include '../_layouts/up.php';
?>

<!-- Page Heading / content -->
<h2>Edit Data BLT UMKM</h2>
<hr>
<form method="post" action="">
  <input type="hidden" name="id_umkm" value="<?=$umkm["id_umkm"];?>">
  <div class="mb-3">
    <label for="nama_umkm" class="form-label">Nama</label>
    <input type="text" name="nama_umkm" class="form-control" value="<?php echo $umkm['nama_umkm'] ?>">
  </div>
  <div class="mb-3">
    <label for="nonik_umkm" class="form-label">No. Induk Keluarga</label>
    <input type="text" name="nonik_umkm" class="form-control" value="<?php echo $umkm['nonik_umkm'] ?>">
  </div>
  <div class="mb-3">
    <label for="jumlah_umkm" class="form-label">Jumlah Tunai BLT umkm</label>
    <input type="text" name="jumlah_umkm" class="form-control" value="<?php echo $umkm['jumlah_umkm'] ?>">
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>

<?php
include '../_layouts/down.php';
?>