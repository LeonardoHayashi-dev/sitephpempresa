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
                <div class="col">
                    <h1>Cadastro</h1>

                    <form action="cadastro_script.php" method="post">


                        <!-- Agora sempre for criar um campo em nosso projeto teremos um <DIV> -->
                        <div class="form-group">
                            <label for="nome">Nome Completo</label>
                            <input type="text" class="form-control" name="nome" require>
                       </div>
                        <div class="form-group">
                            <label for="endereco">Endereço</label>
                            <input type="text" class="form-control" name="endereco"  require>
                        </div>

                        <div class="form-group">
                            <label for="telefone">Telefone</label>
                            <input type="text" class="form-control" name="telefone"  require>
                        </div>
                        <div class="form-group">
                            <label for="datanasc">Email</label>
                            <input type="email" class="form-control" name="email"  require>
                        </div>
                        <div class="form-group">
                            <label for="datanasc">Data de Nascimento</label>
                            <input type="date" class="form-control" name="data_nascimento"  require>
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" name="enviar" value="Enviar">
                        </div>
                    </form>
                </div>
            </div>

        </div>


    </body>
    <!-- JavaScript BootStrap -->
    <script src="./js/bootstrap.bundle.min.js">
    </script>

</html>