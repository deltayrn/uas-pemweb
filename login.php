<?php
    include("config.php");
    session_start();

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        // username and password sent from form

        $myusername = mysqli_real_escape_string($db,$_POST['username']);
        $mypassword = mysqli_real_escape_string($db,$_POST['password']);

        $sql = "SELECT * FROM login WHERE login = '$myusername' and password = '$mypassword'";
        $result = mysqli_query($db,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

        $count = mysqli_num_rows($result);
        // var_dump($row, $count);exit;

        // If result matched $myusername and $mypassword, table row must be 1 row

        if($count == 1) {
            $_SESSION['is_login'] = true;
            $_SESSION['username'] = $row['login'];
            $_SESSION['fullname'] = $row['name'];
            header("location: personal.php");
        }else {
            $error = "Your Login Name or Password is invalid";
            header("location: index.php?login_error=true");
        }
    } else {
        header("location: index.php?login_error=true");
    }
?>