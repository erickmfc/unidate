<?php
// Receba os dados do formulário
$username = $_POST['username'];
$password = $_POST['password'];

// Conecte-se ao banco de dados
$servername = "localhost";
$username_db = "seu_usuario_db";
$password_db = "sua_senha_db";
$dbname = "meu_banco_de_dados";

$conn = new mysqli($servername, $username_db, $password_db, $dbname);

// Verifique as credenciais no banco de dados
$sql = "SELECT id FROM usuarios WHERE username = '$username' AND senha = '$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Credenciais válidas, redirecione para a página de sucesso
    header("Location: pagina_sucesso.html");
} else {
    // Credenciais inválidas, exiba uma mensagem de erro
    echo "Nome de usuário ou senha incorretos.";
}

// Feche a conexão com o banco de dados
$conn->close();
?>
