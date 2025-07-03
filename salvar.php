<?php
session_start(); // Inicia a sessão para permitir o uso de variáveis globais de sessão.

if (isset($_POST["presenca"])) { // Verifica se há um array 'presenca' enviado via POST.
    $_SESSION["presencas"] = $_POST["presenca"]; // Se existir, armazena os valores na variável de sessão.
} else {
$_SESSION["presencas"] = []; // Se não houver dados enviados, inicializa a variável de sessão como um array vazio.
}

header("Location: index.php"); // Redireciona o usuário de volta para a página principal (index.php).
exit(); // Garante que o script pare imediatamente após o redirecionamento.