<?php
session_start();
$db = mysqli_connect('127.0.0.1','root','','chat');
if ( !$db ){
    echo '<script>console.log ("连接错误: ' . mysqli_connect_error() .'");</script>';
}else {
    echo '<script>console.log ("连接到数据库");</script>';
}
?>

