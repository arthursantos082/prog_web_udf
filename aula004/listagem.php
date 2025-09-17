<!DOCTYPE html>
<html lang="pt-BR">
<head>

<?php
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");

$arquivo = "dados.txt";
$linhas = file($arquivo, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>listagem</title>
</head>
<body>
    
    <div class="container">
        <h2>Listagem de Pessoas</h2>
        <table>
            <thead>
                <tr>
                    <?php
                    $cabecalho = explode(";",$linhas[0]);
                    foreach($cabecalho as $coluna) {
                        echo "<th>".htmlspecialchars($coluna)."</th>";
                    }
                    ?>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                        for($i = 1; $i < count($linhas); $i++) {
                            $colunas = explode(";",$linhas[0]);
                            echo "<tr>";
                            foreach($colunas as $coluna) {
                                echo "<td>".htmlspecialchars($coluna)."</th>";
                            }
                            echo "</tr>";
                        }
                    ?>
                </tr>
            </tbody>
        </table>
        
        <a href="cadastro.php">Cadastrar Dados</a>
    </div>

</body>
</html>