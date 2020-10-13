<?php
    $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 4);
    //只取前4位，这样只判断最优先的语言。如果取前5位，可能出现en,zh的情况，影响判断。
    if (preg_match("/zh-c/i", $lang)){
        include "cn.php";
        $GLOBALS['L'] = $lan;
    }else{
        include "fr.php";
        $GLOBALS['L'] = $lan;
    }
?>
