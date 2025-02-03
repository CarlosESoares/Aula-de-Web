<?php
    include_once("Database.php");
    include_once("PessoaDAO");

    if (isset($_GET["pessoa_id"])) {
        $id2 = $_GET["pessoa_id"];
        $pessoa = getUsuario($id2);
    } else {
        die("Pessoa não encontrada");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Pessoa</title>
    <style>
        body {
            display: flex;
            justify-content: center; 
            align-items: center; 
            min-height: 100vh; 
            margin: 0;
            background-color: #f4f4f4; 
            font-family: Arial, sans-serif;
        }

        fieldset {
            width: 100%;
            max-width: 500px; 
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

        label {
            display: block;
            margin-bottom: 8px;
            font-size: 1em;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
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
<form action="pessoaControle.php" method="post">
    <input type="hidden" name="id" value="<?php echo $pessoa['idusuario']; ?>">
    <label for="nome">Nome: </label>
    <input type="text" name="nome" value="<?php echo $pessoa['nome']; ?>" required>
    <label for="email">Email: </label>
    <input type="email" name="email" value="<?php echo $pessoa['email']; ?>" required>
    <label for="usuario">Usuário: </label>
    <input type="text" name="usuario" value="<?php echo $pessoa['usuario']; ?>" required>
    <label for="senha">Senha: </label>
    <input type="password" name="senha" value="<?php echo $pessoa['senha']; ?>" required>

    <input type="hidden" name="acao" value="editar">
    <input type="submit" value="Salvar alterações">
    
    <button type="submit" name="acao" value="delete" class="delete-btn">Excluir Usuário</button>
</form>

</body>
</html>
