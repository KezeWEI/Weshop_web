<?php
    require_once 'config.php';
    $conn=mysqli_connect($servername, $username, $password, $dbname);
    if (mysqli_connect_errno())
    {
        echo "error: " . mysqli_connect_error();
    }
?>