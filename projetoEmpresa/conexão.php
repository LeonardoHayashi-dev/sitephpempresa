<!-- Inicando o PHP -->
<?php
// Criando Variável
$server = "localhost"; //"aso estivesse hospedado na web ou em um servidor, eu informaria a URL.
$user = "root"; //Estou colocando ROOT porque este usuário pode ser mudado
$pass = '123456'; //Caso nosso banco tivesse senha colocaria mas como ñ tem.
$bd = "empresa"; //Se conectando com o Banco de Dados

// Usando uma função do PHP para se conectar com o Banco de Dados
// Passando parametros pa a função mysqli_connect()
//Usando o IF() estamos verificando se foi ou não conectado
if ($conn = mysqli_connect($server, $user, $pass, $bd)) {
    //Se se conectou vai aparecer a menssagem
    echo "Conectado!";
} else //Caso nã seja conectado vai aparecer erro
    echo "Erro!";

// Criando uma função
function mensagem($texto, $tipo)
{
    echo "<div class='alert alert-$tipo' role='alert'>
           $texto
          </div>";
};
?>
<!-- //Finalizando o PHP -->