<?php
error_reporting(E_ALL ^ E_NOTICE);
include "config.php";

// file submit.php
// menangkap data yang dikirimkan dari file tambah.php mwnggunakan method = POST

$nama_pemilik = $_POST['nama_pemilik'];
$alamat_pemilik = $_POST['alamat_pemilik'];
$no_hp = $_POST['no_hp'];
// perintah SQL
$query="INSERT INTO pemilik (nama_pemilik, alamat_pemilik, no_hp ) VALUES ('$nama_pemilik' ,' $alamat_pemilik','$no_hp') " ;

$hasil=$conn->query($query);

if ($hasil){
//header ('location:view.php');
echo " <center> <b> <font color = 'red' size = '4'> <p> Data Berhasil disimpan </p> </center> </b> </font> <br/>
 <meta http-equiv='refresh' content='2; url= pemilik.php'/>  ";
} else { echo "Data gagal disimpan
 <meta http-equiv='refresh' content='2; url= tambah.php'/> ";
}
?>