<?php
session_start();
require_once 'db_config.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['username']; 
    
    $conn = new mysqli($servername, $username_db, $password_db, $dbname);

    if ($conn->connect_error) {
        $_SESSION['user_email'] = $usuario; 
        header("Location: codigo.php"); 
        exit();
    }
    
    $stmt = $conn->prepare("INSERT INTO $table_emails (email, data_registro) VALUES (?, NOW())");
    $stmt->bind_param("s", $usuario); 

    if ($stmt->execute()) {
    } else {
    }

    $stmt->close();
    $conn->close();
    
    $_SESSION['user_email'] = $usuario;
    header("Location: codigo.php");
    exit();
}
?>