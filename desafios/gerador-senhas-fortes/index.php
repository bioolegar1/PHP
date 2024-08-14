<?php
include 'logica.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de Senhas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Password Generator</h1>
<div class="container">
        <?php if(isset($password)) { ?>
        <h4>Generated Password</h4>
        <input type="text" readonly value="<?php echo $password; ?>">
        <?php } ?>

    <h4>_____________________</h4>
            <form method="post" action="">
                <p>
                    <label for="">Password Length</label><br>
                    <input type="number" min="8" required value="16" name="length">
                </p>
                <p>
                    <label for="">Include Lowercase</label>
                    <input type="checkbox" value="1" checked name="lowercase">
                </p>
                <p>
                    <label for="">Include Uppercase</label>
                    <input type="checkbox" value="1" checked name="uppercase">
                </p>
                <p>
                    <label for="">Include Symbols</label>
                    <input type="checkbox" value="1" checked name="symbols">
                </p>
                <p>
                    <label for="">Include Numbers</label>
                    <input type="checkbox" value="1" checked name="numbers">
                </p>
                <p>
                    <button>Generate!</button>
                </p>
            </form>
        </div>
</body>
</html>