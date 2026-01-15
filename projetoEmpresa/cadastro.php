<?php
include 'conexao.php'; // Inclui o arquivo que faz a conexão com o banco ($conn)
include 'menu.php';    // Inclui o arquivo do menu de navegação da página

$mensagem = ""; // Inicializa a variável que exibirá avisos de sucesso ou erro

// Verifica se o formulário foi enviado via método POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
   
    // Captura os dados do formulário:
    // trim() remove espaços em branco extras no início e fim
    // ?? '' é o operador "null coalescing", evita erro se o campo vier vazio
    $nome     = trim($_POST['nome'] ?? '');
    $marca    = trim($_POST['marca'] ?? '');
    $voltagem = trim($_POST['voltagem'] ?? '');
   
    // Além de limpar espaços, troca a vírgula pelo ponto para o banco aceitar como decimal
    $preco    = str_replace(',', '.', trim($_POST['preco'] ?? ''));

    // Validação básica: verifica se campos essenciais estão vazios
    if (empty($nome) || empty($marca) || empty($voltagem)) {
        $mensagem = "<p>Preencha todos os campos obrigatórios!</p>";
    } else {
        // Prepara a Query SQL usando placeholders (?) por segurança (evita SQL Injection)
        $stmt = $conn->prepare("
            INSERT INTO produtos (nome, marca, voltagem, preco)
            VALUES (?, ?, ?, ?)
        ");

        // Vincula as variáveis aos (?) na ordem: s (string), s, s, d (double/número)
        $stmt->bind_param("sssd", $nome, $marca, $voltagem, $preco);

        // Tenta executar a gravação no banco de dados
        if ($stmt->execute()) {
            $mensagem = "<p style='color:green'>Produto cadastrado com sucesso!</p>";
        } else {
            // Se der erro, mostra a mensagem de erro técnica gerada pelo MySQL
            $mensagem = "<p style='color:red'>Erro ao cadastrar: " . $stmt->error . "</p>";
        }

        // Fecha a declaração preparada para liberar memória
        $stmt->close();
    }
}
?>