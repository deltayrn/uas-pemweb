<?php
include "config.php";
// kalau tidak ada id_pemilik di query string
if (!isset($_GET['id_pemilik'])) {
    header('Location: index.php');
}
//ambil id_pemilik dari query string
$id_pemilik = $_GET['id_pemilik'];
// buat query untuk ambil data dari database
$sql = "SELECT * FROM pemilik WHERE id_pemilik=$id_pemilik";
$query = mysqli_query($db, $sql);
$pemilik = mysqli_fetch_assoc($query);
// jika data yang di-edit tidak ditemukan
if (mysqli_num_rows($query) < 1) {
    die("data tidak ditemukan...");
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Toko Hijab Online</title>
</head>

<body>
    <header>
        <h3>Form Edit</h3>
    </header>
    <form action="aksi_edit_pemilik.php" method="POST">
        <fieldset>
            <input type="hidden" name="id_pemilik" value="<?php echo $pemilik['id_pemilik'] ?>" />

            <p>
                <label for="nama">Nama: </label>
                <input type="text" name="nama" placeholder="Nama Pemilik" value="<?php echo $pemilik['nama_pemilik'] ?>" />
            </p>

            <p>
                <label for="alamat">Alamat: </label>
                <input type="text" name="alamat" placeholder="Alamat Pemilik" value="<?php echo $pemilik['alamat_pemilik'] ?>" />
            </p>

            <p>
                <label for="nohp">No HP: </label>
                <input type="text" name="nohp" placeholder="Nomo Handphone Pemilik" value="<?php echo $pemilik['no_hp'] ?>" />
            </p>

            <input type="submit" value="Simpan" name="simpan" />
            <a href="personal.php"><button type="button">Kembali</button></a>
        </fieldset>
    </form>
</body>

</html>