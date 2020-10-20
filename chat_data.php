<?php
require 'conn_chat.php';
$act = $_GET['act'];

switch ($act) {
    case 'change_status':
        $status_now = $_GET['status'];
        if ($status_now == 'Connected') {
            $do = "UPDATE admin SET status = '0' WHERE name = 'weshop'";
            $res = mysqli_query($db, $do);
            if ($res == true) {
                echo '<script>console.log("status of connection changed to offline");</script>';
            } else {
                echo 'failed';
            }
        } else if ($status_now == 'Disconnected') {
            $do = "UPDATE admin SET status = '1' where name = 'weshop'";
            $res = mysqli_query($db, $do);
            if ($res == true) {
                echo '<script>console.log("status of connection changed to online");</script>';
            } else {
                echo 'failed';
            }
        }
        break;
    case 'msg' :
        $ip = $_GET['ip'];
        $msg = $_GET['msg'];
        $time = $_GET['time'];
        $others = $_GET['others'];
        $do = "INSERT INTO msg (ip, msg, time, others) VALUES ('$ip','$msg','$time','$others')";
        $res = mysqli_query($db, $do);
        if ($res == true) {
            echo '<script>console.log("msg stored to db");</script>';
        } else {
            echo 'failed';
        }
        break;
}
