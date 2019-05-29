<?php session_start(); if(!isset($_SESSION['is_login'])) {$_SESSION['is_login'] = false;} include_once('config.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Informasi | Real property</title>
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
                    <a class="nav-link" href="./index.php#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="./index.php#informasi">Informasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./index.php#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/index.php#contact">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    <!--- Start Personal property Section-->
    <div id="informasi" class="offset">
        <div class="jumbotron container-fluid">
            <div class="col-12 text-center">
                <h2 class="heading">Real Property</h2>
                <div class="heading-underline"></div>
                <p class="jumbotron-caption">Real Properti adalah hak perseorangan atau badan untuk memiliki, dalam arti menguasai tanah dengan suatu hak atas tanah, misalnya hak milik atau hak guna bangunan berikut pengembangan yang melekat padanya. Misalnya tanah, bangunan dan saran pelengkapnya</p>
            </div>
            <div class="container">
            <div class="row">
                <?php
                $sql = "SELECT * FROM property p JOIN jenis j ON j.`id_jenis` = p.`id_jenis` JOIN pemilik pm ON p.`id_pemilik` = pm.`id_pemilik` WHERE j.`id_jenis` = 1";
                $result = $conn->query($sql);
                ?>
                <div class="card-group">
                    <?php
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            ?>
                            <div class="col-md-4">
                                <div class="card" style="margin-bottom:1em;">
                                    <img class="card-img-top" src="<?php echo $row['img']; ?>">

                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo $row['nama_property']; ?></h5>
                                        <p class="small text-muted"><?php echo $row['nama_jenis']; ?></p>
                                        <p class="small"><?php echo $row['nama_pemilik']; ?></p>

                                        
                                    </div>
                                    <?php
                                        if ($_SESSION['is_login']) {
                                            ?>
                                            <div class="card-footer">
                                            <div class="text-right">
                                                <button class="btn btn-primary">Edit</button>
                                                <button class="btn btn-danger">Delete</button>
                                                
                                            </div>
                                            
                                            </div>

                                        <?php
                                    }
                                    ?>
                                    
                                </div>
                            </div>
                        <?php
                        
                    }
                }
                ?>


                </div>
                <table >
                                <tr>
                                    <td><a href="aksi_tambah_properti.php"> <button type="submit">Tambah Properti</button> </td> 
                                </tr>
                            </table>
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
                </div>
                <!---End of row-->
            </footer>
        </div>
        <!--- End Contact Section -->



        <script src="js/jquery-3.4.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>

</body>

</html>