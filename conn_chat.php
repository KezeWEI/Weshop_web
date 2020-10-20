<?php
session_start();
$conn = mysqli_connect('127.0.0.1','root','','mydb');
if ( !$conn ){
    echo '<script>console.log ("connect to mydb error : ' . mysqli_connect_error() .'");</script>';
}else {
    echo '<script>console.log ("connected to mydb");</script>';
}
?>

