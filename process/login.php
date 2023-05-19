<?php
    session_start();
    require_once("../koneksi.php");
    
    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $query = mysqli_query($koneksi, "select * from users where username='$username' and password='$password'");
        if(mysqli_num_rows($query) > 0){
            $data = mysqli_fetch_assoc($query);
            $token = random_string(15);
            $currentDate = new DateTime();
            $currentDate->modify('+30 days');
            $futureDate = $currentDate->format('Y-m-d');
            mysqli_query($koneksi, "insert into token values('', '$token', '$futureDate')");
            $_SESSION["username"] = $username;
            $_SESSION["role"] = $data['role'];
            $_SESSION['token'] = $token;
            $_SESSION['login'] = true;
        }
        else{
            $_SESSION["error"] = "Username atau password salah";
        }
        header("location:../login.php");
    }

    if(isset($_GET['logout'])){
        session_unset();
        session_destroy();
        header("location:../login.php");
    }

    function random_string($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';
    
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, strlen($characters) - 1)];
        }
    
        return $randomString;
    }

