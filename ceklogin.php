<?php
session_start();
// jika tidak ada $_SESSION dan $_COOKIE maka
// alihkan ke halaman login
if(!isset($_SESSION['']) AND !isset($_COOKIE[''])){
   header("location:login.php"); 
}
?>