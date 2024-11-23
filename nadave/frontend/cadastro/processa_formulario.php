<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['telefone'];
    $problema = $_POST['problema'];

    $sql = "INSERT INTO problemas (nome, email, endereco, problema) VALUES ('$nome', '$email', '$endereco', '$problema','$telefone')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Registro adicionado com sucesso!";
        header("Location: dashboard.html");
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>