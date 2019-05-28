<?php
include "config.php";
if (isset($_GET['id_pemilik'])) {
    // ambil id_pemilik dari query string
    $id_pemilik = $_GET['id_pemilik'];
    // buat query hapus
    $sql = "DELETE FROM pemilik WHERE id_pemilik='$id_pemilik'";
    $query = mysqli_query($db, $sql);
    // apakah query hapus berhasil?
    if ($query) {
        echo " <center> <b> <font color = 'red' size = '4'> <p> Data Berhasil Dihapus </p> </center> </b> </font> <br/> <meta http-equiv='refresh' content='2; url=personal.php'/>  ";
    } else {
        echo " <center> <b> <font color = 'red' size = '4'> <p> Data Gagal Dihapus </p> </center> </b> </font> <br/> <meta http-equiv='refresh' content='2; url=personal.php'/>  ";
    }
} else {
    echo " <center> <b> <font color = 'red' size = '4'> <p> Data Gagal Dihapus </p> </center> </b> </font> <br/> <meta http-equiv='refresh' content='2; url=personal.php'/>  ";
}
