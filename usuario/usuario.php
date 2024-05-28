<?php
// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se os campos obrigatórios foram preenchidos
    if (!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password'])) {
        // Aqui você faria a validação dos campos (por exemplo, verificar se o nome de usuário já existe no banco de dados)
        // Para este exemplo, vamos apenas mostrar uma mensagem de sucesso
        $success_message = "Usuário registrado com sucesso!";
    } else {
        // Campos obrigatórios não foram preenchidos
        $error_message = "Por favor, preencha todos os campos obrigatórios.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuário</title>
</head>
<body>
    <h2>Registro de Usuário</h2>
    <?php
    // Exibe uma mensagem de erro, se houver
    if (isset($error_message)) {
        echo '<p style="color: red;">' . $error_message . '</p>';
    }
    // Exibe uma mensagem de sucesso, se houver
    if (isset($success_message)) {
        echo '<p style="color: green;">' . $success_message . '</p>';
    }
    ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="username">Nome de Usuário:</label><br>
        <input type="text" id="username" name="username" required><br><br>
        <label for="email">E-mail:</label><br>
        <input type="email" id="email" name="email" required><br><br>
        <label for="password">Senha:</label><br>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" value="Registrar">
    </form>
</body>
</html>
