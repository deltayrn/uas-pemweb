<?php
include("config.php");
if( isset($_POST['id_property']) ){
    // ambil id_property dari Form POST
    $id_property = $_POST['id_property'];
    // ambil data lain
    $id_jenis = $_POST['id_jenis'];
    $id_pemilik = $_POST['id_pemilik'];
    $nama_property = $_POST['nama_property'];
    $img = $_POST['img'];

    // buat query Update
    $sql = "
        UPDATE
            `property`
        SET
            `id_jenis` = '". $id_jenis ."',
            `id_pemilik` = '". $id_pemilik ."',
            `nama_property` = '". $nama_property ."',
            `img` = '". $img ."'
        WHERE
            `id_property` = ". $id_property ."
    ";
    $query = mysqli_query($db, $sql);
    
    // apakah query hapus berhasil?
    if( $query ){
        echo " <center> <b> <font color = 'red' size = '4'> <p> Data Berhasil disimpan </p> </center> </b> </font> <br/> <meta http-equiv='refresh' content='2; url=properti.php'/>  ";
    } else {
        echo " <center> <b> <font color = 'red' size = '4'> <p> Data gagal disimpan </p> </center> </b> </font> <br/> <meta http-equiv='refresh' content='2; url=properti.php'/>  ";
    }
} else {
    echo " <center> <b> <font color = 'red' size = '4'> <p> Data gagal disimpan </p> </center> </b> </font> <br/> <meta http-equiv='refresh' content='2; url=properti.php'/>  ";
}
?>