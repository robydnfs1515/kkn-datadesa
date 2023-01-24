<?php
require '../_helpers/helper.php';
$id = $_GET["id"];

if (delete_bbm($id) > 0) {
    echo "<script>
        alert('Data Berhasil di Hapus!');
        document.location.href='bbm.php';
        </script>";
} else {
    echo "<script>
        alert('Data Gagal di Hapus!');
        document.location.href='bbm.php';
        </script>";
}