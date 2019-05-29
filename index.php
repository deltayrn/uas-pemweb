<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aset Management | Welcome</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css"> 
    
</head>
<body data-spy="scroll" data-target="#navbarResponsive">
<?php session_start() ?>
<!--- Start Home Section-->
<div id="home">

<!--Navigation-->
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="index.php"><img src="img/aset.png"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href ="#home">Home</a>
            </li>
            <li class="nav-item" >
                <a class="nav-link" href ="#informasi">Informasi</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href ="#about">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href ="#contact">Contact</a>
            </li>
        </ul>

    </div>
</nav>

<!---Start image slider-->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="7000">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1" ></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2" ></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <!--Slide 1-->
        <div class="carousel-item active" style="background-image: url(img/pengertian.png);">
            <div class="carousel-caption text-center">
                <h1>Selamat Datang</h1>
                <h3>Pengelolaan Aset Daerah Karangmalang</h3>
                <a class="btn btn-outline-light btn-lg" href="#informasi">Kelola Aset</a>
            </div>
        </div>
        <!---Slide 2-->
        <div class="carousel-item" style="background-image: url(img/karakteristik.jpg);">
            <div class="carousel-caption text-center">
                <h2>Apa itu aset?</h2>
                <p>Menurut PSAK No. 16 Revisi Tahun 2011, aset adalah semua kekayaan yang dipunyai oleh individu ataupun kelompok yang berwujud maupun tidak berwujud, yang memiliki nilai akan memiliki manfaat bagi setiap orang atau perusahaan</p>
            </div>
        </div>
        <!--slide 3-->
        <div class="carousel-item" style="background-image: url(img/jenis.png);">
            <div class="carousel-caption text-center">
                <h2>Mengapa aset harus dikelola?</h2>
                <p>Melacak segala jenis mesin dan aset yang anda miliki akan sangat merepotkan. Maka dari itu sebuah solusi Aset manajemen yang sukses dapat menghemat tidak hanya uang dan waktu namun juga kesulitan dalam manajemen.</p>
            </div>
        </div>
    </div><!--End Carousel Inner-->
    <!---Prev & next button-->
    <a class carousel-control-prev href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    </a>
    <a class carousel-control-next href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
    </a>
</div>
<!---End image slider--->

</div>

<!--- End Home Section -->

<!--- Start Informasi Section-->
<div id="informasi" class="offset">
<div class="jumbotron container-fluid">
    <div class="col-12 text-center">
        <h3 class="heading">Informasi</h3>
        <div class="heading-underline"></div>
    </div>

<div class="row no-padding">
    <div class="col-md-4">
        <div class="informasi">
        <a href="./properti.php" target="_blank">
            <img src="img/real.png">
        </a>
        </div>
    </div>
    <div class="col-md-4">
        <div class="informasi">
        <a href="./personal.php" target="_blank">
            <img src="img/personal.png">
        </a>
        </div>
    </div>
    <div class="col-md-4">
        <div class="informasi">
        <a href="./pemilik.php" target="_blank">
            <img src="img/pemilik.png">
        </a>
        </div>
    </div>
</div><!--End row-->
<!--- Start login Section -->
<div id="course" class="offset">
        <div class="col-12 narrow text-center">
            <h1>INFORMASI ASET</h1>
            <p class="lead">Login untuk melihat data aset daerah Karangmalang</p>
            <!-- Button trigger modal -->
                <button type="button" class="btn btn-secondary btn-md" data-toggle="modal" data-target="#exampleModal">
                    LOGIN
                </button>
                
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">LOGIN</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <form method="post" action="login.php">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Login Name</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="username" placeholder="Enter username">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
                                </div>
                                <div class="form-group form-check">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>
                        </form>
                    </div>
                    </div>
                </div>
        </div>  
     </div>
    <!--- End login Section -->
</div> <!--End jumbotron-->
</div>
<!--- End Informasi Section -->

<!--- Start About Section-->
<div id="about" class="offset">

    <div class="col-12 text-center">
        <h3 class="heading">About</h3>
        <div class="heading-underline"></div>
    </div>
 

<div class="row padding">

    <div class="col-2">
        <div class="card text-center">
            <img class="card-img-top" src="img/abid.jpg">
            <div class="card-body">
                <h4>Defasta Abid Pradana</h4>
                <p>18520244006</p>
            </div>
        </div>
    </div>

    <div class="col-2">
        <div class="card text-center">
            <img class="card-img-top" src="img/delta.jpg">
            <div class="card-body">
                <h4>Delta Setiyarini</h4>
                <p>18520241027 </p>
            </div>
        </div>
    </div>

    <div class="col-2">
        <div class="card text-center">
            <img class="card-img-top" src="img/fira.jpeg">
            <div class="card-body">
                <h4>Zhafirah Majdina</h4>
                <p>18520244012 </p>
            </div>
        </div>
    </div>

    <div class="col-2">
        <div class="card text-center">
            <img class="card-img-top" src="img/nada.jpg">
            <div class="card-body">
                <h4>Alfiyah Qothrunnada Zulfa</h4>
                <p>18520244013 </p>
            </div>
        </div>
    </div>
    <div class="col-2">
        <div class="card text-center">
            <img class="card-img-top" src="img/yogi.JPG">
            <div class="card-body">
                <h4>Yogi Prasetyo</h4>
                <p>18520244005</p>
             </div>
        </div>
    </div>
</div><!--end of row-->
</div>
<!--- End About Section -->

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
<script>
    <?php if($_GET['login_error'] == true) { ?>
        $(document).ready(function() {
            alert("Login gagal. mohon cek username dan password");
        });
    <?php } ?>
</script>

</body>
</html>