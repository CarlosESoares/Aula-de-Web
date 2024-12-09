<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
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
            width: 100%; /* Tamanho total da caixa de texto */
            padding: 10px;
            margin-bottom: 15px; /* Espaçamento entre os campos */
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 1em;
        }

        input[type="submit"] {
            width: 100%; /* Largura total para o botão */
            padding: 12px;
            background-color: #4CAF50; /* Cor verde do botão */
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 1.2em;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #45a049; /* Cor do botão quando passa o mouse */
        }
    </style>
<body>

<?php
    include("Database.php");
    include("PessoaDAO");
    if(isset($_GET["pessoa_id"])){
        $id = $_GET["pessoa_id"];
        $pessoa = getUsuario($id);
    }else{
        die("Pessoa nao encontrada");
    }

?>



    <h2> Edição de pessoa</h2>
    <fieldset>
    <form action="pessoaControle.php" method="post">
        <input type="text" name="id" id="id" hidden>
        <label for="nome">Nome </label>
        <input type="text" name="nome" id="nome" value="<?php echo $pessoa["nome"]?>">
        <label for="email">Email </label>
        <input type="email" name="email" id="email" value="<?php echo $pessoa["email"]?>">
        <input type="text" name="acao" value="editar" hidden>
        <input type="submit" value="Salvar alterações">
    </form>

    </fieldset>
</body>
</html>