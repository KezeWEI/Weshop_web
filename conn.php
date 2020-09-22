<?php
    $servername = "127.0.0.1:8080";
    $username = "root";
    $password = "022611";
    $dbname = "myDB";
    $conn=mysqli_connect($servername, $username, $password, $dbname);
    if (mysqli_connect_errno())
    {
        echo "连接失败: " . mysqli_connect_error();
    }
?>