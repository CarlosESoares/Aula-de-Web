<?php
include_once("Database.php");
include_once("functions.php"); // Inclua as funções já criadas

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verifica se um ID foi enviado para exclusão
    if (isset($_POST['id'])) {
        $id = (int)$_POST['id']; // Converte para inteiro
        $result = deletUsuario($id); // Chama a função de exclusão
        
        if ($result) {
            $message = "Usuário excluído com sucesso!";
        } else {
            $message = "Erro ao excluir usuário.";
        }
    }
}

// Busca todos os usuários para exibição
$usuarios = getUsuarios();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir Usuário</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        th {
            background-color: #f4f4f4;
            text-align: left;
        }
        .message {
            color: green;
            font-weight: bold;
            margin-bottom: 15px;
        }
        .error {
            color: red;
            font-weight: bold;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <h1>Excluir Usuário</h1>

    <?php if (isset($message)): ?>
        <p class="<?php echo $result ? 'message' : 'error'; ?>">
            <?php echo $message; ?>
        </p>
    <?php endif; ?>

    <?php if (!empty($usuarios)): ?>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($usuarios as $usuario): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($usuario['id']); ?></td>
                        <td><?php echo htmlspecialchars($usuario['nome']); ?></td>
                        <td><?php echo htmlspecialchars($usuario['email']); ?></td>
                        <td>
                            <form method="POST" style="display:inline;">
                                <input type="hidden" name="id" value="<?php echo $usuario['id']; ?>">
                                <button type="submit" onclick="return confirm('Tem certeza que deseja excluir este usuário?')">
                                    Excluir
                                </button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>Nenhum usuário encontrado.</p>
    <?php endif; ?>
</body>
</html>
