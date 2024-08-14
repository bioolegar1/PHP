<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validação de CPF</title>
</head>
<body>
    <h1>Validação de CPF</h1>
    <form action="" method="GET">
        <label for="cpf">Insira o CPF:</label>
        <input type="text" id="cpf" name="cpf" required>
        <button type="submit">Validar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        // Inclui o arquivo com a função de validação de CPF
        include 'validatecpf.php';

        $cpf = $_GET['cpf'];

        if (validateCPF($cpf)) {
            echo "<h2>CPF válido</h2>";
        } else {
            echo "<h2>CPF inválido</h2>";
        }
    }
    ?>
</body>
</html>
