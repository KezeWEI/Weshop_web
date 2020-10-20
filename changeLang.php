<?php
session_start();
    if(!isset($_POST['lang'])) $_POST['lang']="";
$lang=$_POST['lang'];
if($lang!=null){
    // echo "收到lang：".$lang;
    $_SESSION['lang'] = $lang;
}

// echo "session:".$_SESSION['lang'];
//没有传值自动判别，有传值就判断，传什么更新什么
if (isset($_SESSION['lang'])) {
    // echo "有lang";
    if ($_SESSION['lang']=="zh") {
        // echo "zh";
        include "cn.php";
        $GLOBALS['L'] = $lan;
    } else if ($_SESSION['lang']=="fr") {
        // echo "fr";
        include "fr.php";
        $GLOBALS['L'] = $lan;
    }
} else {
    // echo "无lang";
    $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    //只取前2位，这样只判断最优先的语言。如果取前5位，可能出现en,zh的情况，影响判断。
    if (preg_match("/zh/i", $lang)) {
        include "cn.php";
        $GLOBALS['L'] = $lan;
    } else if (preg_match("/fr/i", $lang)) {
        include "fr.php";
        $GLOBALS['L'] = $lan;
    }
}
?>
