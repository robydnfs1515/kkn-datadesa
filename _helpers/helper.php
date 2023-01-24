<?php
// koneksi databas
$db = mysqli_connect("localhost", "root", "", "db_datadesatt");

function query($query)
{
    global $db;
    $result = mysqli_query($db, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

// function tambah_admin($data)
// {
//     global $db;
//     $nama_admin = htmlspecialchars($data["NAMA_ADMIN"]);
//     $username_admin = htmlspecialchars($data["USERNAME_ADMIN"]);
//     $password_admin = htmlspecialchars($data["PASSWORD_ADMIN"]);

//     $query = "INSERT INTO users VALUES ('', '$nama_admin', '$username_admin', '$password_admin')";
//     mysqli_query($db, $query);

//     return mysqli_affected_rows($db);
// }

function tambah_upah($data)
{
    global $db;
    $nama_upah = htmlspecialchars($data["nama_upah"]);
    $nonik_upah = htmlspecialchars($data["nonik_upah"]);
    $jumlah_upah = htmlspecialchars($data["jumlah_upah"]);

    $query = "INSERT INTO tb_upah VALUES ('', '$nama_upah', '$nonik_upah', '$jumlah_upah')";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

function tambah_bbm($data)
{
    global $db;
    $nama_bbm = htmlspecialchars($data["nama_bbm"]);
    $nonik_bbm = htmlspecialchars($data["nonik_bbm"]);
    $jumlah_bbm = htmlspecialchars($data["jumlah_bbm"]);

    $query = "INSERT INTO tb_bbm VALUES ('','$nama_bbm','$nonik_bbm','$jumlah_bbm')";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

function tambah_pkp($data)
{
    global $db;
    $nama_pkp = htmlspecialchars($data["nama_pkp"]);
    $nonik_pkp = htmlspecialchars($data["nonik_pkp"]);
    $jumlah_pkp = htmlspecialchars($data["jumlah_pkp"]);

    $query = "INSERT INTO tb_pkp VALUES ('','$nama_pkp','$nonik_pkp', '$jumlah_pkp')";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}
function tambah_umkm($data)
{
    global $db;
    $nama_umkm = htmlspecialchars($data["nama_umkm"]);
    $nonik_umkm = htmlspecialchars($data["nonik_umkm"]);
    $jumlah_umkm = htmlspecialchars($data["jumlah_umkm"]);

    $query = "INSERT INTO tb_umkm VALUES ('','$nama_umkm','$nonik_umkm', '$jumlah_umkm')";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}
function tambah_bpnt($data)
{
    global $db;
    $nama_bpnt = htmlspecialchars($data["nama_bpnt"]);
    $nonik_bpnt = htmlspecialchars($data["nonik_bpnt"]);
    $jumlah_bpnt = htmlspecialchars($data["jumlah_bpnt"]);

    $query = "INSERT INTO tb_bpnt VALUES ('','$nama_bpnt','$nonik_bpnt', '$jumlah_bpnt')";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

function delete_upah($id)
{
    global $db;
    mysqli_query($db, "DELETE FROM tb_upah WHERE id_upah = $id");

    return mysqli_affected_rows($db);
}

function delete_bbm($id)
{
    global $db;
    mysqli_query($db, "DELETE FROM tb_bbm WHERE id_bbm = $id");

    return mysqli_affected_rows($db);
}

function delete_pkp($id)
{
    global $db;
    mysqli_query($db, "DELETE FROM tb_pkp WHERE id_pkp = $id");

    return mysqli_affected_rows($db);
}
function delete_umkm($id)
{
    global $db;
    mysqli_query($db, "DELETE FROM tb_umkm WHERE id_umkm = $id");

    return mysqli_affected_rows($db);
}
function delete_bpnt($id)
{
    global $db;
    mysqli_query($db, "DELETE FROM tb_bpnt WHERE id_bpnt = $id");

    return mysqli_affected_rows($db);
}

function ubah_upah($data)
{
    global $db;
    $id_upah = $data["id_upah"];
    $nama_upah = htmlspecialchars($data["nama_upah"]);
    $nonik_upah = htmlspecialchars($data["nonik_upah"]);
    $jumlah_upah = htmlspecialchars($data["jumlah_upah"]);

    $query = "UPDATE tb_upah SET
        nama_upah = '$nama_upah',
        nonik_upah = '$nonik_upah',
        jumlah_upah = '$jumlah_upah'
    WHERE id_upah = $id_upah
    ";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);

}

function ubah_bbm($data)
{
    global $db;
    $id_bbm = $data["id_bbm"];
    $nama_bbm = htmlspecialchars($data["nama_bbm"]);
    $nonik_bbm = htmlspecialchars($data["nonik_bbm"]);
    $bobot_bbm = htmlspecialchars($data["jumlah_bbm"]);

    $query = "UPDATE tb_bbm SET
        nama_bbm = '$nama_bbm',
        nonik_bbm = '$nonik_bbm',
        jumlah_bbm = '$bobot_bbm'
    WHERE id_bbm = $id_bbm
    ";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

function ubah_pkp($data)
{
    global $db;
    $id_pkp = $data["id_pkp"];
    $nama_pkp = htmlspecialchars($data["nama_pkp"]);
    $jumlah_pkp = htmlspecialchars($data["jumlah_pkp"]);

    $query = "UPDATE tb_pkp SET
        nama_pkp = '$nama_pkp',
        jumlah_pkp = '$jumlah_pkp'
    WHERE id_pkp = $id_pkp
    ";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}
function ubah_umkm($data)
{
    global $db;
    $id_umkm = $data["id_umkm"];
    $nama_umkm = htmlspecialchars($data["nama_umkm"]);
    $jumlah_umkm = htmlspecialchars($data["jumlah_umkm"]);

    $query = "UPDATE tb_umkm SET
        nama_umkm = '$nama_umkm',
        jumlah_umkm = '$jumlah_umkm'
    WHERE id_umkm = $id_umkm
    ";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}
function ubah_bpnt($data)
{
    global $db;
    $id_bpnt = $data["id_bpnt"];
    $nama_bpnt = htmlspecialchars($data["nama_bpnt"]);
    $nonik_bpnt = htmlspecialchars($data["nonik_bpnt"]);
    $jumlah_bpnt = htmlspecialchars($data["jumlah_bpnt"]);

    $query = "UPDATE tb_bpnt SET
        nama_bpnt = '$nama_bpnt',
        nonik_bpnt = '$nonik_bpnt',
        jumlah_bpnt = '$jumlah_bpnt'
    WHERE id_bpnt = $id_bpnt
    ";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

function ubah_user($data)
{
    global $db;
    $id_usr = $data["ID_USERS"];
    $nama_usr = htmlspecialchars($data["NAMA_USERS"]);
    $username_usr = htmlspecialchars($data["USERNAME_USERS"]);
    $password_usr = htmlspecialchars($data["PASSWORD_USERS"]);

    $query = "UPDATE users SET
        NAMA_USERS = '$nama_usr',
        USERNAME_USERS = '$username_usr',
        PASSWORD_USERS = '$password_usr'
    WHERE ID_USERS = $id_usr
    ";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}