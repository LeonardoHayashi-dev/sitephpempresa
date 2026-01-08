<?php
// Captura dos dados
$produto = $_POST['produto'];
$categoria = $_POST['categoria'];
$preco = $_POST['preco'];

// Formatação do preço (2 casas decimais, vírgula para decimal e ponto para milhar)
$precoFormatado = number_format($preco, 2, ',', '.');

echo "<h2>📋 Relatório de Cadastro</h2>";
echo "<hr>";
echo "<strong>Produto:</strong> " . htmlspecialchars($produto) . "<br>";
echo "<strong>Categoria:</strong> " . htmlspecialchars($categoria) . "<br>";
echo "<strong>Preço:</strong> R$ " . $precoFormatado . "<br>";
echo "<hr>";
echo "<a href='index.html'>Voltar para o cadastro</a>";
?>