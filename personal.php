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
                            <a class="nav-link" href ="./index.php#home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href ="./index.php#informasi">Informasi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href ="./index.php#about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href ="/index.php#contact">Contact</a>
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
                <p class="jumbotron-caption">Personal properti meliputi kepemilikan pada benda berwujud atau tidak berwujud yang bukan merupakan real estat. Benda-benda ini tidak secara permanen menjadi satu kesatuan dengan real estat dan secara umum memiliki sifat dapat dipindahkan.</p>
            </div>
            <div class="row">
                <div class="box">
                    <div class="col-lg-12">
                        <hr>
                <div class="demo-html"></div>
                <br>
                <div class="table-responsive">
                <table class="table table-hover" cellspacing="0" width="100%">
                    <?php if ($_SESSION['is_login']) { ?>
                    <thead class="thead-dark">
                        <tr>
                        <tr>
                                    <th>Nama Properti</th>
                                    <th>Jenis Properti </th>
                                    <th>Nama Pemilik</th>
                                    <th>Gambar</th>
                                    <th colspan="2"> Action </th>
                        </tr>
                    <tbody>
                    <?php
                                    $sql = "
                                        SELECT
                                            *
                                        FROM
                                            property p
                                            JOIN jenis j
                                            ON j.`id_jenis` = p.`id_jenis`
                                            JOIN pemilik pm
                                            ON p.`id_pemilik` = pm.`id_pemilik`
                                        WHERE j.`id_jenis` = 2
                                    ";
                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                        while($row = $result->fetch_assoc()) {
                                            echo "<tr>";
                                            echo "<td>".$row['nama_property']."</td>";
                                            echo "<td>".$row['nama_jenis']."</td>";
                                            echo "<td>".$row['nama_pemilik']."</td>";
                                            echo "<td><img src='".$row['img']."' alt='img' style='height:50px' /></td>";
                                            echo "<td>";
                                            echo "<a href='edit_properti.php?id_property=".$row['id_property']."'>Edit</a> | ";
                                            echo "<a href='hapus_properti.php?id_property=".$row['id_property']."'>Hapus</a>";
                                            echo "</tr>";
                                        }
                                    } 
                                ?>
                            <table >
                                <tr>
                                    <td><a href="aksi_tambah_properti.php"> <button type="submit">Tambah Properti</button> </td> 
                                </tr>
                            </table>
                      
                    </thead>
                    </tbody>
                    <?php } else { ?>
                    <thead>
                    <tr>
                        <th>Nama Properti</th>
                        <th>Jenis Properti </th>
                        <th>Nama Pemilik</th>
                        <th>Gambar</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                                    $sql = "
                                        SELECT
                                            *
                                        FROM
                                            property p
                                            JOIN jenis j
                                            ON j.`id_jenis` = p.`id_jenis`
                                            JOIN pemilik pm
                                            ON p.`id_pemilik` = pm.`id_pemilik`
                                        WHERE j.`id_jenis` = 2
                                    ";
                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                        while($row = $result->fetch_assoc()) {
                                            echo "<tr>";
                                            echo "<td>".$row['nama_property']."</td>";
                                            echo "<td>".$row['nama_jenis']."</td>";
                                            echo "<td>".$row['nama_pemilik']."</td>";
                                            echo "<td><img src='".$row['img']."' alt='img' style='height:50px' /></td>";
                                            echo "<td>";
                                            echo "</tr>";
                                        }
                                    } 
                                ?>
                    </tbody>
                    <?php } ?>
                </table>
                </div>
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