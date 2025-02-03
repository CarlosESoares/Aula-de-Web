<?php
// Inclua o arquivo de conexão e função de login
include('PessoaDAO.php'); // Arquivo onde você tem a função 'login'

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Pega os dados do formulário
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    // Chama a função de login
    $resultado = login($usuario, $senha);

    if ($resultado) {
        // Se o login for bem-sucedido, redireciona para a página de sucesso
        session_start();
        $_SESSION['usuario'] = $resultado['usuario']; // Armazena o usuário na sessão
        header("Location:Listar.php"); // Redireciona para a página de sucesso
        exit();
    } else {
        // Se o login falhar, mostra uma mensagem de erro
        echo "<script>alert('Usuário ou senha incorretos!'); window.location.href = 'login.php';</script>";
    }
}
?>