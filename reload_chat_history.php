<?php
require_once 'conn.php';
require_once 'IP.php';
//$do = "SELECT * FROM msg WHERE ip = '" . $ip_local . "' ORDER BY id DESC LIMIT 10";
//$res = mysqli_query ($conn, $do);
//$do = "SELECT * FROM ($res) ORDER BY id";
/*
 * 不能对结果集进行sql操作，但可以通过括号将操作进行嵌套。括号内选出对应IP聊天的最近10条记录，括号外将记录按照时间顺序正序重排
 * Cannot operate res with lang sql, so nest the operations.
 * The code in brackets is used to select the last 10 records, the code outside the brackets is used to reorder them.
 */
$do = "SELECT * FROM (SELECT * FROM msg WHERE ip = '" . $ip_local . "' ORDER BY id DESC LIMIT 10)aa ORDER BY id";
$res = mysqli_query ($conn, $do);
//var_dump ($res);
$arrs = mysqli_fetch_all ($res, MYSQLI_ASSOC);
//print_r ($arrs);
$nums = mysqli_num_rows ($res);
?>
