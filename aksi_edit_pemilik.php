<?php
include("config.php");
if( isset($_POST['id_pemilik']) ){
    $id_pemilik = $_POST['id_pemilik'];
    $nama_pemilik = $_POST['nama'];
    $alamat_pemilik = $_POST['alamat'];
    $no_hp = $_POST['nohp'];

    // buat query Update
    $sql = "
        UPDATE
            `pemilik`
        SET
            `nama_pemilik` = '". $nama_pemilik ."',
            `alamat_pemilik` = '". $alamat_pemilik ."',
            `no_hp` = '". $no_hp ."'
        WHERE
            `id_pemilik` = ". $id_pemilik ."
    ";
    $query = mysqli_query($db, $sql);
    
    // apakah query hapus berhasil?
    if( $query ){
        echo " <center> <b> <font color = 'red' size = '4'> <p> Data Berhasil disimpan </p> </center> </b> </font> <br/> <meta http-equiv='refresh' content='2; url=personal.php'/>  ";
    } else {
        echo " <center> <b> <font color = 'red' size = '4'> <p> Data gagal disimpan </p> </center> </b> </font> <br/> <meta http-equiv='refresh' content='2; url=personal.php'/>  ";
    }
} else {
    echo " <center> <b> <font color = 'red' size = '4'> <p> Data gagal disimpan </p> </center> </b> </font> <br/> <meta http-equiv='refresh' content='2; url=personal.php'/>  ";
}
?>