<?php session_start(); if(!isset($_SESSION['is_login'])) {$_SESSION['is_login'] = false;} include_once('config.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Informasi | Personal property</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css"> 
</head>
<body data-spy="scroll" data-target="#navbarResponsive">

<!--Navigation-->
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="index.html"><img src="img/aset.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
            <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                            <a class="nav-link" href ="./index.html#home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href ="./index.html#informasi">Informasi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href ="./index.html#about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href ="/index.html#contact">Contact</a>
                        </li>
            </ul>
        </div>
</nav>

<!--- Start Personal property Section-->
<div id="informasi" class="offset">
        <div class="jumbotron container-fluid">
            <div class="col-12 text-center">
                <h2 class="heading">personal property</h2>
                <div class="heading-underline"></div>
        </div>
        <div id="informasi" class="offset">
            <div class="jumbotron container-fluid">
                <div class="col-12 text-center">
                    <h2 class="heading">Pemilik aset</h2>
                    <div class="heading-underline"></div>
            </div>
            <div class="row">
                <div class="box">
                    <div class="col-lg-12">
                        <hr>
                <div class="demo-html"></div>
                <br>
                <table id="example" class="display" cellspacing="0" width="100%">
                    <?php if ($_SESSION['is_login']) { ?>
                    <thead>
                        <tr>
                            <th>Nama Pemilik</th>
                            <th>Alamat Pemilik </th>
                            <th>Nomor Handphone </th>
                            <th colspan='2'> Action </th>
                        </tr>
                    <tbody>
                        <?php
                            $sql = "SELECT * FROM `pemilik`";
                            $result = $conn->query($sql);
                            $i = 1;
    
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    echo "<tr>";
                                    echo "<td>".$row['nama_pemilik']."</td>";
                                    echo "<td>".$row['alamat_pemilik']."</td>";
                                    echo "<td>".$row['no_hp']."</td>";
                                    echo "<td>";
                                    echo "<a href='edit_pemilik.php?id_pemilik=".$row['id_pemilik']."'>Edit</a> | ";
                                    echo "<a href='hapus_pemilik.php?id_pemilik=".$row['id_pemilik']."'>Hapus</a>";
                                    echo "</tr>";
                                     $i++; 
                                }
                            } 
                        ?>
                            <table >
                                <tr>
                                    <td><a href="tambah_pemilik.php"> <button type="submit">Tambah Pemilik</button> </td> 
                                </tr>
                            </table>
                      
                    </thead>
                    </tbody>
                    <?php } else { ?>
                    <thead>
                    <tr>
                            <th>Nama Pemilik</th>
                            <th>Alamat Pemilik </th>
                            <th>Nomor Handphone </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $sql = "SELECT * FROM `pemilik`";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    echo "<tr>";
                                    echo "<td>".$row['nama_pemilik']."</td>";
                                    echo "<td>".$row['alamat_pemilik']."</td>";
                                    echo "<td>".$row['no_hp']."</td>";
                                    echo "<a href='edit_produk.php?id_produk=".$row['id_pemilik']."'>Edit</a> | ";
                                    echo "<a href='hapus_produk.php?id_produk=".$row['id_pemilik']."'>Hapus</a>";
            
                                    echo "</tr>";
                                }
                            } 
                        ?>
                        <table >
                                <tr>
                                    <td><a href="tambah.php"> <button type="submit">Tambah Karyawan</button> </td> 
                                </tr>
                            </table>
                    </tbody>
                    <?php } ?>
                </table>
                    </div>
                </div>
            </div>       
</div>
<!--- End Personal property Section -->
<!--- Start Contact Section-->
<div id="contact" class="offset">

        <footer>
        <div class="row justify-content-center">
        
            <div class="col-md-5 text-center">
                <img src="img/aset.png">
                <p>Karangmalang, Yogyakarta </p>
            <strong> Contact Info</strong>
            <p>(+62)857-0050-5149<br>adkarangmalang@uny.ac.id</p>
            </div>
            <hr class="socket">
            &copy; 2019.
        </div><!---End of row-->
        </footer>
        </div>
        <!--- End Contact Section -->
        
        
        
        <script src="js/jquery-3.4.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        
        </body>
        </html>