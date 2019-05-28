<?php

include "config.php";
?>
<html>
<head>
 <title> Tambah Pemilik Baru </title>
 <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/navbar-fixed-top.css" rel="stylesheet">
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">
    <link href="css/jquery.dataTables.min.css" rel="stylesheet">
 
</head>
<body style = 'margin : 20px; font : 16px arial;'>
 <center>
 <div class="row">
            <div class="box">
                <div class="col-lg-12">
 <h1> Registrasi Karyawan Baru </h1>
 
 <form method = 'POST' action = 'aksi_tambah_pemilik.php'>
 <table border = '1' cellspacing = '1' cellpadding = '10'
 style = 'border : #aaa; color: #101; font-family : arial; fot-size : 12px;'>
 <tr>
  <td> Nama Pemilik </td>
  <td width = '5' align = 'center'> : </td>
  <td> <input type = 'varchar' placeholder='Nama Pemilik' name = 'nama_pemilik' /> </td>
  </tr>
 <tr>
  <td> Alamat Pemilik </td>
  <td align = 'center'> : </td>
  <td> <input type = 'varchar' placeholder='Alamat Pemilik' name = 'alamat_pemilik' /> </td>
  </tr>
 <tr>
  <td> Nomor Handphone </td>
  <td align = 'center'> : </td>
  <td> <input type = 'varchar' placeholder='Nomor HP' name = 'no_hp' /> </td>
  </tr>
 
  
 <tr>
 <td colspan = '3' align = 'center'>
 <input type = 'submit' name = 'submit' value = 'Submit'/>
 <input type = 'reset' name = 'Reset' value = 'Reset' /> </td>
 </tr>
</table>
</form>
</div>
</div>
</div>
</center>
<a href = 'index.php'> Kembali </a>
</form>
</body>
</html>  