<?php
include("config.php");
// kalau tidak ada id_produk di query string
if( !isset($_GET['id_produk']) ){
 header('Location: index.php');
}
//ambil id_produk dari query string
$id_produk = $_GET['id_produk'];
// buat query untuk ambil data dari database
$sql = "SELECT * FROM produk WHERE id_produk=$id_produk";
$query = mysqli_query($db, $sql);
$produk = mysqli_fetch_assoc($query);
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
 <form action="aksi_edit.php" method="POST">
 <fieldset>
 <input type="hidden" name="id_produk" value="<?php echo $produk['id_produk'] ?>" />
 <p>
 <label for="id_produk">Id Produk: </label>
 <input type="text" name="id_produk" placeholder="Produk" value="<?php echo
 $produk['id_produk'] ?>" />
 </p>
 <p>
 <label for="id_warna">Warna: </label>
 <select name="id_warna">
 <?php
    $sql = "SELECT * FROM warna";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $selected = ($row['id_warna'] == $produk['id_warna']) ? 'selected' : '';
            echo '<option value="'.$row['id_warna'].'" '. $selected .'>'.$row['deskripsi_warna'].'</option>';
        }
    }
 ?>
 </select>
 <!-- <input type="text" name="id_warna" placeholder="Warna" value="<?php echo
 $produk['id_warna'] ?>" /> -->
 </p>
 <p>
 <label for="id_bahan">Bahan: </label>
 <select name="id_bahan">
 <?php
    $sql = "SELECT * FROM bahan";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $selected = ($row['id_bahan'] == $produk['id_bahan']) ? 'selected' : '';
            echo '<option value="'.$row['id_bahan'].'" '. $selected .'>'.$row['deskripsi_bahan'].'</option>';
        }
    }
 ?>
 </select>
 </p>
 <p>
 <label for="id_ukuran">Ukuran: </label>
 <select name="id_ukuran" value="<?=$produk['id_ukuran']?>">
 <?php
    $sql = "SELECT * FROM ukuran";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $selected = ($row['id_ukuran'] == $produk['id_ukuran']) ? 'selected' : '';
            echo '<option value="'.$row['id_ukuran'].'" '. $selected .'>'.$row['deskripsi_ukuran'].'</option>';
        }
    }
 ?>
 </select>
 </p>
 <p>
 <label for="stock">stock: </label>
 <input type="text" name="stock" placeholder="Stock" value="<?php echo
 $produk['stock'] ?>" />
 </p>
 <p>
 <label for="harga_satuan">Harga Satuan: </label>
 <input type="text" name="harga_satuan" placeholder="Harga Satuan" value="<?php echo
 $produk['harga_satuan'] ?>" />
 </p>
 <p>
 <input type="submit" value="Simpan" name="simpan" />
 <a href="index.php"><button type="button">Kembali</button></a>
 </p>
 </fieldset>
 </form>
 </body>
</html>