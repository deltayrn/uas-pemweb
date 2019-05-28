<?php
include("config.php");
// kalau tidak ada id_property di query string
if( !isset($_GET['id_property']) ){
 header('Location: index.php');
}
//ambil id_property dari query string
$id_property = $_GET['id_property'];
// buat query untuk ambil data dari database
$sql = "SELECT * FROM property WHERE id_property=$id_property";
$query = mysqli_query($db, $sql);
$property = mysqli_fetch_assoc($query);
// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
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
    <form action="aksi_edit_properti.php" method="POST">
        <fieldset>
            <input type="hidden" name="id_property" value="<?php echo $property['id_property'] ?>" />
            <p>
                <label for="id_jenis">Jenis Properti: </label>
                <select name="id_jenis">
                    <?php
                        $sql = "SELECT * FROM jenis";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                $selected = ($row['id_jenis'] == $property['id_jenis']) ? 'selected' : '';
                                echo '<option value="'.$row['id_jenis'].'" '. $selected .'>'.$row['nama_jenis'].'</option>';
                            }
                        }
                    ?>
                </select>
            </p>
            <p>
                <label for="id_pemilik">Pemilik: </label>
                <select name="id_pemilik">
                    <?php
                        $sql = "SELECT * FROM pemilik";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                $selected = ($row['id_pemilik'] == $property['id_pemilik']) ? 'selected' : '';
                                echo '<option value="'.$row['id_pemilik'].'" '. $selected .'>'.$row['nama_pemilik'].'</option>';
                            }
                        }
                    ?>
                </select>
            </p>
            <p>
                <label for="nama_property">Nama Properti: </label>
                <input type="text" name="nama_property" placeholder="nama properti" value="<?php echo $property['nama_property'] ?>" />
            </p>
            <p>
                <label for="img">URL Gambar Property: </label>
                <input type="text" name="img" placeholder="Harga Satuan" value="<?php echo $property['img'] ?>" />
            </p>
            <p>
                <input type="submit" value="Simpan" name="simpan" />
                <a href="properti.php"><button type="button">Kembali</button></a>
            </p>
        </fieldset>
    </form>
</body>

</html>