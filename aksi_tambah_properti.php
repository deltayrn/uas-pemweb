<?php
error_reporting(E_ALL ^ E_NOTICE);
include "config.php";

// file submit.php
// menangkap data yang dikirimkan dari file tambah.php mwnggunakan method = POST

$id_jenis = $_POST['id_jenis'];
$id_pemilik = $_POST['id_pemilik'];
$nama_property = $_POST['nama_property'];
$img = $_POST['img'];
// perintah SQL
$query="INSERT INTO property (id_jenis, id_pemilik, nama_property, img ) VALUES ('$id_jenis', ' $id_pemilik', '$nama_property', ' $img') " ;

$hasil=$conn->query($query);

if ($hasil){
//header ('location:view.php');
echo " <center> <b> <font color = 'red' size = '4'> <p> Data Berhasil disimpan </p> </center> </b> </font> <br/>
 <meta http-equiv='refresh' content='2; url= properti.php'/>  ";
} else { echo "<center> <b> <font color = 'red' size = '4'> <p> Data Gagal disimpan </p> </center> </b> </font> <br/>
 <meta http-equiv='refresh' content='2; url= tambah_properti.php'/> ";
}
?>