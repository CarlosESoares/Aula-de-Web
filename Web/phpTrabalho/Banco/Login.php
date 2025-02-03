<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #e8f5e9; /* Verde claro */
        }

        .login-container {
            background-color: #ffffff; /* Branco */
            border: 2px solid #4caf50; /* Verde escuro */
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;
            text-align: center;
        }

        .login-container h1 {
            color: #4caf50; /* Verde escuro */
            margin-bottom: 20px;
        }

        .login-container input[type="text"],
        .login-container input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #4caf50; /* Verde escuro */
            border-radius: 5px;
        }

        .login-container button {
            background-color: #4caf50; /* Verde escuro */
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .login-container button:hover {
            background-color: #45a049; /* Verde escuro mais claro */
        }

        .login-container a {
            color: #4caf50; /* Verde escuro */
            text-decoration: none;
            font-size: 14px;
        }

        .login-container a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <form action="loginControle.php" method="post">
            <label for="usuario">Insira seu usuário: </label>
            <input type="text" name="usuario" id="usuario">
            <label for="senha">Insira sua senha: </label>
            <input type="password" name="senha" id="senha">
            <input type="submit" value="Login">
        </form>
    </div>
</body>
</html>
