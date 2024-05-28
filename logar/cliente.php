<?php
// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se o nome de usuário e a senha foram fornecidos
    if (!empty($_POST['username']) && !empty($_POST['password'])) {
        // Aqui você faria a validação do nome de usuário e senha (por exemplo, verificar em um banco de dados)
        // Para este exemplo, vamos apenas verificar se o nome de usuário é 'admin' e a senha é 'senha'
        if ($_POST['username'] === 'admin' && $_POST['password'] === 'senha') {
            // Nome de usuário e senha válidos, redireciona para a página de boas-vindas
            header("Location: welcome.php");
            exit();
        } else {
            // Nome de usuário ou senha inválidos
            $error_message = "Nome de usuário ou senha incorretos.";
        }
    } else {
        // Campos de nome de usuário ou senha não foram preenchidos
        $error_message = "Por favor, preencha todos os campos.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <?php
    // Exibe uma mensagem de erro, se houver
    if (isset($error_message)) {
        echo '<p style="color: red;">' . $error_message . '</p>';
    }
    ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="username">Nome de Usuário:</label><br>
        <input type="text" id="username" name="username"><br><br>
        <label for="password">Senha:</label><br>
        <input type="password" id="password" name="password"><br><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>
