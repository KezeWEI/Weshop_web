<?php
$societe = $_GET['societe'];
$email = $_GET['email'];
$tel = $_GET['tel'];
$postale = $_GET['postale'];
$addr = $_GET['addr'];
$body = "societe : $societe <br> "
    . "e-mail : $email <br> "
    . "telephone :　$tel <br>"
    . "code postale :　$postale <br>"
    . "addresse :　$addr <br>";
$msg = $_GET['msg'];
$body .= "message : <br> $msg";
?>
<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Feedback de payment</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Varela Round', sans-serif;
            background: #fbfbfb;
        }

        .card {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 325px;
            min-height: 400px;
            background: #fff;
            box-shadow: 0 20px 50px rgba(0, 0, 0, .1);
            border-radius: 10px;
            transition: 0.5s;

        }

        .card:hover {
            box-shadow: 0 30px 70px rgba(0, 0, 0, .2);
        }

        .card .box {
            position: absolute;
            top: 50%;
            left: 0;
            transform: translateY(-50%);
            text-align: center;
            padding: 20px;
            box-sizing: border-box;
            width: 100%;

        }

        /*1为成功页面的格式，0为失败页面格式*/
        .card .box .icon-box_1 {
            color: #fff;
            position: absolute;
            margin: 0 auto;
            left: 0;
            right: 0;
            top: -70px;
            width: 95px;
            height: 95px;
            border-radius: 50%;
            z-index: 9;
            background: #82ce34;
            padding: 15px;
            text-align: center;
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
        }

        .card .box .icon-box_1 i {
            font-size: 58px;
            position: relative;
            top: 3px;
        }

        .card .box .icon-box_0 {
            color: #fff;
            position: absolute;
            margin: 0 auto;
            left: 0;
            right: 0;
            top: -70px;
            width: 95px;
            height: 95px;
            border-radius: 50%;
            z-index: 9;
            background: #d9534f;
            padding: 15px;
            text-align: center;
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
        }

        .card .box .icon-box_0 i {
            font-size: 58px;
            position: relative;
            top: 3px;
        }

        .card .box h2 {
            text-align: center;
            font-size: 26px;
            margin: 30px 0 -15px;
        }

        .card .box p {
            color: #262626;
        }
    </style>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <!--成功部分代码 -->
    <div class="card" id="suc">
        <div class="box">
            <div class="icon-box_1">
                <i class="material-icons">&#xE876;</i>
            </div>
            </br>
            <p style="float: left;">Nous avons bien reçu vos messages et nous allons vous repondre des que possible.</p>

            </br></br>

            <h2>Bravo!</h2>

            </br>
            <p style="float: center">Votre message :<br>
                <?php echo $msg; ?>
            </p>
        </div>
    </div>
    <!-- 成功部分代码结束 -->
</body>

</html>

<!-- 发送邮件 -->
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);


//smtp settings*
$mail->CharSet = "UTF-8";
$mail->SMTPDebug = 2;
$mail->isSMTP();
//*******************************************修改发件箱
$mail->Host = "smtp.qq.com";
$mail->SMTPAuth = true;
$mail->Username = "384413301@qq.com";
$mail->Password = 'weugvljxuqbcbhii';
$mail->Port = 465;
$mail->SMTPSecure = "ssl";

//email settings
$mail->isHTML(true);
$mail->setFrom('384413301@qq.com');
//*******************************************修改收件箱
$mail->addAddress("frederic.victor.yang@gmail.com");
$mail->Subject = ("下班时间咨询的客户");
$mail->Body = $body;
?>
<div style="display: none;"><?php $mail->send(); ?></div><!-- send函数会反馈发送结果，移出div能看到错误 -->