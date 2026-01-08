<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro</title>
    <!-- BootStrap CSS -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <!-- Aqui esmos informando que o código abaixo  é PHP -->
            <?php
            // Inclui a conexão (Certifique-se que $conn está definida lá dentro)
            include "conexao.php";

            // Verificamos se os dados foram enviados via POST para evitar os erros de "Undefined key"
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                // Recebendo os valores do formulário
                // Usamos mysqli_real_escape_string por segurança contra SQL Injection básica
                $nome            = mysqli_real_escape_string($conn, $_POST['nome']);
                $endereco        = mysqli_real_escape_string($conn, $_POST['endereco']);
                $telefone        = mysqli_real_escape_string($conn, $_POST['telefone']);
                $email           = mysqli_real_escape_string($conn, $_POST['email']);
                $data_nascimento = mysqli_real_escape_string($conn, $_POST['data_nascimento']);

                // Montando a query SQL
                $sql = "INSERT INTO `pessoas` (`nome`, `endereco`, `telefone`, `email`, `data_nascimento`)
            VALUES ('$nome', '$endereco', '$telefone', '$email', '$data_nascimento')";

                // O CORRETO: mysqli_query para executar a inserção
                if (mysqli_query($conn, $sql)) {
                    mensagem("$nome cadastro com sucesso!", "sucess");
                } else {
                     mensagem("$nome não foi cadastrado!", "danger");;
                }
            } else {
                echo "<div class='alert alert-warning'>Por favor, envie o formulário primeiro.</div>";
            }
            ?>
            <div class="form-group">
                <a href="index.php" class="btn btn btn-primary">Voltar Cadastro</a>
            </div>

        </div>
</body>
<!-- JavaScript BootStrap -->
<script src="./js/bootstrap.bundle.min.js">
</script>

</html>