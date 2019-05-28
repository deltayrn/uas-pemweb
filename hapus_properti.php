<?php
include "config.php";
if (isset($_GET['id_property'])) {
    // ambil id_property dari query string
    $id_property = $_GET['id_property'];
    // buat query hapus
    $sql = "DELETE FROM property WHERE id_property='$id_property'";
    $query = mysqli_query($db, $sql);
    // apakah query hapus berhasil?
    if ($query) {
        echo " <center> <b> <font color = 'red' size = '4'> <p> Data Berhasil Dihapus </p> </center> </b> </font> <br/> <meta http-equiv='refresh' content='2; url=properti.php'/>  ";
    } else {
        echo " <center> <b> <font color = 'red' size = '4'> <p> Data Gagal Dihapus </p> </center> </b> </font> <br/> <meta http-equiv='refresh' content='2; url=properti.php'/>  ";
    }
} else {
    echo " <center> <b> <font color = 'red' size = '4'> <p> Data Gagal Dihapus </p> </center> </b> </font> <br/> <meta http-equiv='refresh' content='2; url=properti.php'/>  ";
}
