<?php 
//Inicia uma sessão, permitindo que variáveis de sessão sejam usadas e persistam entre requisições.
session_start();
$alunos = ["Ana", "Bruno", "Diana", "Eduardo"];

if (!isset($_SESSION["presencas"])) {
    $_SESSION["presencas"] = [];
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Define a condição de caracteres como UTF - 8 para suportar acentos e caracteres especiasi -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle de Presenças</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Controle de Presença</h1><!-- Título principal da página -->

        <form action="salvar.php" method="POST">
              <!-- Loop em PHP para iterar sobre o array de alunos e gerar caixas de seleção -->
            <?php foreach ($alunos as $aluno): ?>
                <div class="aluno">
                    <label>
                        <input 
                            type="checkbox" 
                            name="presenca[]" 
                            value="<?= $aluno ?>" 
                            <?= in_array($aluno, $_SESSION["presencas"]) ? "checked" : "" ?>
                        >
                        <?= $aluno ?>
                    </label>
                </div>
            <?php endforeach; ?>
            <button type="submit">Salvar Presença</button>
        </form>

        <h2>Presenças Marcadas</h2>
        <ul>
            <?php foreach ($_SESSION["presencas"] as $presente): ?>
                <li><?= $presente ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
</body>
</html>