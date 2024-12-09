<?php
    include_once("Database.php");
    include_once("pessoaDAO");

    // Verifica se o ID do usuário foi passado via GET
    if (isset($_GET["pessoa_id"])) {
        $id = $_GET["pessoa_id"];
        $pessoa = getUsuario($id);
    } else {
        die("Pessoa não encontrada");
    }

    // Verifica se a ação é para deletar o usuário
    if (isset($_POST["acao"]) && $_POST["acao"] == "deletar") {
        $id = $_POST["id"]; // Captura o ID do usuário para exclusão
        if (deletUsuario($id)) {
            // Após excluir, redireciona para a página de listagem
            header("Location: Listar.php");
            exit;
        } else {
            // Se ocorrer erro na exclusão, redireciona para a página de listagem
            header("Location: Listar.php");
            exit;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Pessoa</title>
    <style>
        /* Configuração geral do body */
        body {
            display: flex;
            justify-content: center; /* Alinha o conteúdo horizontalmente */
            align-items: center; /* Alinha o conteúdo verticalmente */
            min-height: 100vh; /* Ocupa toda a altura da tela */
            margin: 0;
            background-color: #f4f4f4; /* Cor de fundo da página */
            font-family: Arial, sans-serif;
        }

        /* Estilizando o fieldset */
        fieldset {
            width: 100%;
            max-width: 500px; /* Limita o tamanho máximo do form */
            padding: 20px;
            border: 2px solid #ccc;
            border-radius: 8px;
            background-color: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        legend {
            font-size: 1.5em;
            font-weight: bold;
            margin-bottom: 10px;
        }

        /* Estilo para os rótulos e inputs */
        label {
            display: block;
            margin-bottom: 8px;
            font-size: 1em;
        }

        input[type="text"],
        input[type="email"] {
            width: 100%; 
            padding: 10px;
            margin-bottom: 15px; 
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 1em;
        }

        input[type="submit"] {
            width: 100%; 
            padding: 12px;
            background-color: #4CAF50; 
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 1.2em;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #45a049;  
        }

        /* Estilo do botão de exclusão */
        .delete-btn {
            background-color: red;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .delete-btn:hover {
            background-color: darkred;
        }
    </style>
</head>
<body>

<h2>Editar Pessoa</h2>
<form action="editar.php" method="post">
    <input type="text" name="id" value="<?php echo $pessoa['id']; ?>" hidden>
    <label for="nome">Nome: </label>
    <input type="text" name="nome" value="<?php echo $pessoa['nome']; ?>" required>
    <label for="email">Email: </label>
    <input type="email" name="email" value="<?php echo $pessoa['email']; ?>" required>
    
    <input type="text" name="acao" value="editar" hidden>
    <input type="submit" value="Salvar alterações">
</form>

<!-- Formulário de exclusão -->
<form action="editPessoa.php" method="post" onsubmit="return confirm('Tem certeza de que deseja excluir este usuário?');">
    <input type="text" name="id" value="<?php echo $pessoa['id']; ?>" hidden>
    <input type="text" name="acao" value="deletar" hidden>
    <input type="submit" value="Excluir Usuário" class="delete-btn">
</form>

</body>
</html>
