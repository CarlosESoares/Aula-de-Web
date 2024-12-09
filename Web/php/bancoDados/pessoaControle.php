<?php
    include_once("database.php");
    include_once("pessoaDAO.php");

    if(isset($_POST["nome"]) && isset($_POST["email"])){
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        save($nome,$email);
    }else{
        echo "Não deu certo";
    }
?>