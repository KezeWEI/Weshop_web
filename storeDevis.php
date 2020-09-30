<?php
    require 'conn.php';

    $data = $_POST;
    $mainProduct = $data['radio'];
    //autreproduit
    $checkbox = $_POST['checkbox'];   
    for($i=0;$i<count($checkbox);$i++){
        $otherproduct= $otherproduct.$checkbox[$i]."  ";  
    }
    $company = $data['company']; 
    $email = $data['email'];

    $telephone = $data['telephone'];
    $postcode = $data['postcode'];
    $address = $data['address'];
    $messages = $data['message'];

    echo "电话：".$telephone;

    $sql = "INSERT INTO Devis (prinProduits, autreProduits, societe, email, telephone, codePostale, addresse, messages, statut) 
    VALUES ('$mainProduct', '$otherproduct', '$company', '$email','$telephone','$postcode','$address','$messages',0);";
    
    if ($conn->query($sql) === TRUE) {
        echo "新记录插入成功";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
?>