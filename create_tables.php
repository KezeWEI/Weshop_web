<?php
require 'conn.php';

$sql = "CREATE TABLE Devis(
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        prinProduits VARCHAR(30),
        autreProduits VARCHAR(90),
        societe VARCHAR(50),
        email VARCHAR(30),
        telephone VARCHAR(20),
        codePostale VARCHAR(20),
        addresse VARCHAR(60),
        messages VARCHAR(150),
        statut BOOLEAN,
        reg_date TIMESTAMP
    )";
if ($conn->query($sql) === TRUE) {
    echo "Table Devis created successfully";
} else {
    echo "创建数据表错误: " . $conn->error;
}
