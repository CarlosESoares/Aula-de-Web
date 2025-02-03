<?php
    include_once("Database.php");
    include_once("PessoaDAO");
   
// Habilitar exibição de erros
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

    if (isset($_POST["acao"]) && $_POST["acao"] == "cadastrar") {
        if (isset($_POST["nome"]) && isset($_POST["email"]) && isset($_POST["usuario"]) && isset($_POST["senha"])) {
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $usuario = $_POST["usuario"];
            $senha = $_POST["senha"];
    
            save($nome, $email, $usuario, $senha); // Certifique-se de passar os 4 argumentos
            header("Location: Listar.php");
        } else {
            echo "Todos os campos são obrigatórios.";
        }

    }
    if (isset($_POST["acao"]) && $_POST["acao"] == "editar") {
        if (isset($_POST["id"]) && isset($_POST["nome"]) && isset($_POST["email"]) && isset($_POST["usuario"]) && isset($_POST["senha"])) {
            $id = $_POST["id"];
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $usuario = $_POST["usuario"];
            $senha = $_POST["senha"]; // Corrigido o ponto e vírgula
            editUsuario($id, $nome, $email, $usuario, $senha); // Atualizando usuário
            header("Location: Listar.php");
            exit();
        } else {
            echo "Erro ao editar usuário";
        }
    }
    
    if (isset($_POST["acao"]) && $_POST["acao"] == "delete") {
        if (isset($_POST["id"])) {
            $id = $_POST["id"];
            deletUsuario($id);
            header("Location: Listar.php");

            }

            }
    


?>