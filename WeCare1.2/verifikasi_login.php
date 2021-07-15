<?php
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi_login.php';

// menangkap data yang dikirim dari form login
$username = $_POST['email'];
$password = $_POST['kata_sandi'];
$_SESSION["login"] = true;


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"SELECT * FROM tadm WHERE email='$username' AND kata_sandi='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if($cek > 0){

 $data = mysqli_fetch_assoc($login);

 // cek jika user login sebagai admin
 if($data['posisi']=="Administrator"){

  // buat session login dan username
  $_SESSION['email'] = $username;
  $_SESSION['posisi'] = "Administrator";
  // alihkan ke halaman dashboard admin
  header("location:page_admin.php");

 // cek jika user login sebagai pegawai
 }else if($data['posisi']=="PIC Regional"){
  // buat session login dan username
  $_SESSION['email'] = $username;
  $_SESSION['posisi'] = "PIC Regional";
  // alihkan ke halaman dashboard pegawai
  header("location:page_regional.php");

}else if($data['posisi']=="PIC Witel"){
    // buat session login dan username
    $_SESSION['email'] = $username;
    $_SESSION['posisi'] = "PIC Witel";
    // alihkan ke halaman dashboard pegawai
    header("location:page_witel.php");
  

 }else{

  // alihkan ke halaman login kembali
  header("Location:menulogin.php?error=Incorect User name or password");
 } 
}else{
    header("Location:menulogin.php?error=Incorect User name or password");
}

?>