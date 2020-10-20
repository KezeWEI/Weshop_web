<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';
    require 'conn.php';
    
    $data = $_POST;
    $mainProduct = $data['radio'];
    //autreproduit
    $checkbox = $_POST['checkbox'];   
    for($i=0;$i<count($checkbox);$i++){
        $otherproduct= $otherproduct.$checkbox[$i].",  ";  
    }
    $company = $data['company']; 
    $email = $data['email'];
    $telephone = $data['telephone'];
    $postcode = $data['postcode'];
    $address = $data['address'];
    $messages = $data['message'];
    $date = date('Y-m-d');

    $sql = "INSERT INTO Devis (prinProduits, autreProduits, societe, email, telephone, codePostale, addresse, messages, statut,reg_date) 
    VALUES ('$mainProduct', '$otherproduct', '$company', '$email','$telephone','$postcode','$address','$messages',0,'$date');";
    
    if ($conn->query($sql) === TRUE) {
        echo "新记录插入成功";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();


    $body = ("Societe : $company <br> Email : $email  <br> Telephone : $telephone <br> Postcode : $postcode <br> Address : $address 
    <br> Messages : $messages <br> MainProduct : $mainProduct <br> Otherproduct : $otherproduct");
    $mail = new PHPMailer(true);
    $mail->CharSet = "UTF-8";
    $mail->SMTPDebug = 2;
    $mail->isSMTP();
    $mail->Host = "smtp.qq.com";
    $mail->SMTPAuth = true;
    $mail->Username = "384413301@qq.com";
    $mail->Password = 'weugvljxuqbcbhii';
    $mail->Port = 465;
    $mail->SMTPSecure = "ssl";
    $mail->isHTML(true);
    $mail->setFrom('384413301@qq.com');
    //收件箱地址
    $mail->addAddress("keze.wei@utt.fr");
    $mail->Subject = ("Nouveau Devis");
    $mail->Body = $body;
    $mail->send();
