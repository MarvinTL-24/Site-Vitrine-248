<?php

$nome = $_POST["nome"];
$quantidade = $_POST["quantidade"];
$tamanho = $_POST["tamanho"];
$cor = $_POST["cor"];

//Conectar com o banco de dados

$conn = new mysqli('localhost','root','','');

if ($conn->connect_error) {
    die('Connection failed'. $conn->connect_error);
}else{
    $sql = "INSERT INTO alunos() 
    VALUES('$nome', '$quantidade','$tamanho', '$cor')";

    if(mysqli_query($conn, $sql)){
        session_start();
        if(mysqli_affected_rows($conn) > 0){
            $_SESSION["insert"] = "1";
            header('Location: ');
        }else{
            $_SESSION["insert"] = "2";
            header('Location: ');
        }
    }else{
        echo "Falha no comando SQL";
    }
}
?>