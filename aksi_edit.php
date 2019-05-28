<?php
include("config.php");
if( isset($_POST['id_produk']) ){
    // ambil id_produk dari Form POST
    $id_produk = $_POST['id_produk'];
    // ambil data lain
    $id_warna = $_POST['id_warna'];
    $id_bahan = $_POST['id_bahan'];
    $id_ukuran = $_POST['id_ukuran'];
    $stock = $_POST['stock'];
    $harga_satuan = $_POST['harga_satuan'];

    // buat query Update
    $sql = "
        UPDATE
            `produk`
        SET
            `id_warna` = ". $id_warna .",
            `id_bahan` = ". $id_bahan .",
            `id_ukuran` = ". $id_ukuran .",
            `stock` = ". $stock .",
            `harga_satuan` = ". $harga_satuan ."
        WHERE
            `id_produk` = ". $id_produk ."
    ";
    $query = mysqli_query($db, $sql);
    
    // apakah query hapus berhasil?
    if( $query ){
        echo " <center> <b> <font color = 'red' size = '4'> <p> Data Berhasil disimpan </p> </center> </b> </font> <br/> <meta http-equiv='refresh' content='2; url=index.php'/>  ";
    } else {
        echo " <center> <b> <font color = 'red' size = '4'> <p> Data gagal disimpan </p> </center> </b> </font> <br/> <meta http-equiv='refresh' content='2; url=index.php'/>  ";
    }
} else {
    echo " <center> <b> <font color = 'red' size = '4'> <p> Data gagal disimpan </p> </center> </b> </font> <br/> <meta http-equiv='refresh' content='2; url=index.php'/>  ";
}
?>