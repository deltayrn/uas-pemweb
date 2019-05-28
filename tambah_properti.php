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

<body style='margin : 20px; font : 16px arial;'>
    <center>
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <h1> Tambah Properti </h1>
                    <?php
                        if(isset($_GET['personal']) && $_GET['personal'] == true) {
                            $id_jenis = 2;
                        } else {
                            $id_jenis = 1;
                        }
                    ?>
                    <form method='POST' action='aksi_tambah_properti.php'>
                        <table border='1' cellspacing='1' cellpadding='10'
                            style='border : #aaa; color: #101; font-family : arial; fot-size : 12px;'>
                            <input type="hidden" name="id_jenis" value="<?=$id_jenis?>">
                            <tr>
                                <td> Nama Pemilik </td>
                                <td width='5' align='center'> : </td>
                                <td>
                                    <select name="id_pemilik">
                                    <?php
                                        $sql = "SELECT * FROM pemilik";
                                        $result = $conn->query($sql);
                                        if ($result->num_rows > 0) {
                                            while($row = $result->fetch_assoc()) {
                                                // $selected = ($row['id_pemilik'] == $produk['id_pemilik']) ? 'selected' : '';
                                                // echo '<option value="'.$row['id_ukuran'].'" '. $selected .'>'.$row['deskripsi_ukuran'].'</option>';
                                                echo '<option value="'.$row['id_pemilik'].'">'.$row['nama_pemilik'].'</option>';
                                            }
                                        }
                                    ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td> Nama Properti </td>
                                <td align='center'> : </td>
                                <td> <input type='text' placeholder='Nama Properti' name='nama_property' /> </td>
                            </tr>
                            <tr>
                                <td> URL Gambar Property </td>
                                <td align='center'> : </td>
                                <td> <input type='text' placeholder='Gambar Properti' name='img' /> </td>
                            </tr>


                            <tr>
                                <td colspan='3' align='center'>
                                    <input type='submit' name='submit' value='Submit' />
                                    <input type='reset' name='Reset' value='Reset' /> </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </center>
    <a href='properti.php'> Kembali </a>
    </form>
</body>

</html>