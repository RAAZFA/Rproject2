<?php
require_once('_koneksi.php');
if (isset($_POST['register'])){
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password= md5($_POST['password']);
    $telp = $_POST['telp'];
    $query = "INSERT INTO masyarakat 
    VALUES ('$nik','$nama','$username','$password','$telp')";
    mysqli_query($conn, $query);
    header("Location: login.php");

}
if (isset($_POST['login'])){
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $level = $_POST['level'];
    if ($level == "rakyat"){
        $query = "SELECT * FROM masyarakat where username='$username'";
        $hasil = mysqli_query($conn,$query);
        $masyarakat = mysqli_fetch_array($hasil);
       /* if ($password==$masyarakat['password']){
            session_start();
            $_SESSION['nik'] = $masyarakat['nik'];
            $_SESSION['nama'] = $masyarakat['nama'];
            $_SESSION['username'] = $masyarakat['username']; 
            $_SESSION['password'] = $masyarakat['password'];
            $_SESSION['telp'] = $masyarakat['telp'];
            $_SESSION['level'] = "rakyat";
            header("Location: index.php");
        } else{*/
            if ($masyarakat==NULL){
                echo"
                <script>alert('username tidak ditemukan');
                window.location.replace('login.php'); 
                </script>";
            }else if ($password<>$masyarakat['password']){
                echo"
                <script>alert('password salah');
                window.location.replace('login.php'); 
                </script>";
            }else {
                session_start();
                $_SESSION['nik'] = $masyarakat['nik'];
                $_SESSION['nama'] = $masyarakat['nama'];
                $_SESSION['username'] = $masyarakat['username']; 
                $_SESSION['password'] = $masyarakat['password'];
                $_SESSION['telp'] = $masyarakat['telp'];
                $_SESSION['level'] = "rakyat";
                echo"
                <script>alert('Selamat ');
                window.location.replace('index.php'); 
                </script>";
            //header("Location: index.php");
            }

           /* header("Location: login.php");
        }*/
    } else {
        $query = "SELECT * FROM petugas where username='$username'";
        $hasil = mysqli_query($conn,$query);
        $petugas = mysqli_fetch_array($hasil);
        if ($petugas==NULL){
            echo"
            <script>alert('username tidak ditemukan');
            window.location.replace('login.php'); 
            </script>";
        }else if ($password<>$petugas['password']){
            echo"
            <script>alert('password salah');
            window.location.replace('login.php'); 
            </script>";
        }else {
            session_start();
            $_SESSION['nama'] = $petugas['nama'];
            $_SESSION['username'] = $petugas['username'];
            $_SESSION['password'] = $petugas['password']; 
            $_SESSION['telp'] = $petugas['telp'];
            $_SESSION['level'] = $petugas['level'];
            header("Location: index.php");
        }
        /*if ($password==$petugas['password']){
            session_start();
            $_SESSION['nama'] = $petugas['nama'];
            $_SESSION['username'] = $petugas['username'];
            $_SESSION['password'] = $petugas['password']; 
            $_SESSION['telp'] = $petugas['telp'];
            $_SESSION['level'] = $petugas['level'];
            header("Location: index.php");
        } else{
            header("Location: login.php");
        }*/
    }
}
if (isset($_POST['update_profile'])) {
    $nik = $_POST['nik'];
    $nama =  $_POST['nama'];
    $username = $_POST['username'];
    $telp = $_POST['telp'];
    $query = "UPDATE  masyarakat SET
    nama = '$nama',
    username = '$username',
    telp = '$telp' 
    where nik = '$nik'
    ";
    $hasil = mysqli_query($conn, $query);
    if ($password == $update['password']){
    session_start();
        $_SESSION['nama'] = $nama;
        $_SESSION['username'] = $username; 
        $_SESSION['telp'] = $telp;
    }
    header("Location: profil.php");
}
?>