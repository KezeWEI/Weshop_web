<?php
    require 'conn.php';

    $data = $_POST;
    $prinProduits = $data['radio'];
    //autreproduit
    $checkbox = $_POST['checkbox'];   
    for($i=0;$i<count($checkbox);$i++){
        $autreProduits= $autreProduits.$checkbox[$i]."  ";  
    }
    $societe = $data['societe']; 
    $email = $data['email'];

    $telephone = $data['telephone'];
    $codePostale = $data['codePostale'];
    $addresse = $data['addresse'];
    $messages = $data['message'];

    echo "电话：".$telephone;

    $sql = "INSERT INTO Devis (prinProduits, autreProduits, societe, email, telephone, codePostale, addresse, messages, statut) 
    VALUES ('$prinProduits', '$autreProduits', '$societe', '$email','$telephone','$codePostale','$addresse','$messages',0);";
    
    if ($conn->query($sql) === TRUE) {
        echo "新记录插入成功";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
?>