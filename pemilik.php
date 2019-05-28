<?php session_start(); if(!isset($_SESSION['is_login'])) {$_SESSION['is_login'] = false;} include_once('config.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Informasi | Pemilik Aset</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css"> 
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/navbar-fixed-top.css" rel="stylesheet">
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="css/business-casual.css" rel="stylesheet">
    <link href="css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
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
                <h2 class="heading">Pemilik aset</h2>
                <div class="heading-underline"></div>
        </div>
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong>
                        <?php if ($_SESSION['is_login']) {
                            echo "Employees";
                        } else {
                            echo "Menu";
                        } ?>
                         in Mirae Japanesee Restaurant
                        </strong>
                    </h2>
                    <body class="dt-example">
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
                                echo "<a href='edit_produk.php?id_produk=".$row['id_produk']."'>Edit</a> | ";
                                echo "<a href='hapus_produk.php?id_produk=".$row['id_produk']."'>Hapus</a>";
                                echo "</tr>";
                                 $i++; 
                            }
                        } 
                    ?>
                        <table >
                            <tr>
                                <td><a href="tambah.php"> <button type="submit">Tambah Karyawan</button> </td> 
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