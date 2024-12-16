<?php
    include_once("Database.php");
    include_once("PessoaDAO");
   

    if(isset($_POST["acao"]) && $_POST["acao"] == "cadastrar"){
        if(isset($_POST["nome"]) && isset($_POST["email"])){
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            save($nome,$email);
            header("Location: Listar.php");
        }else{
            echo "Não deu certo";
        }
    }
    if (isset($_POST["acao"]) && $_POST["acao"] == "editar") {
        if (isset($_POST["id"]) && isset($_POST["nome"]) && isset($_POST["email"])) {
            $id = $_POST["id"];
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            editUsuario($id, $nome, $email); // Atualizando usuário
            header("Location: Listar.php");
            exit();
        } else {
            echo "Erro ao editar usuário";}
    }
    if (isset($_POST["acao"]) && $_POST["acao"] == "delete") {
        if (isset($_POST["id"])) {
            $id = $_POST["id"];
            deletUsuario($id);
            header("Location: Listar.php");

            }

            }
    


?>