<!DOCTYPE html>
<html lang="pt-BR">
<?php
header("Cache-Control: no-cache, no-store, must-revalidade");
header("Pragma: no-cache");
header("Expires: 0");

$arquivo = "dados.txt";
$linhas = file($arquivo, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
?>
<head>
    <meta charset="UTF-8" />
    <title>Cadastro de Pessoa</title>
    <style>
        body {
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #4E73DF, #1CC88A);
            margin: 0px;
            height: 100vh;
            display: flex;
            justify-content: center; /* Horizontal */
            align-items: center; /* Vertical */
        }
        .container {
            background-color: #fff;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2);
            width: 350px;
            text-align: center;
            animation: fade-in 0.8s ease-in-out;
        }
        h2 {
            margin-bottom: 1.5rem;
            color: #333;
        }
        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #333;
            padding: 8px 12px;
            text-align: center
        }
        th {
            background-color: #F2F2F2;
        }
        button {
            background-color: #4E73DF;
            color: #FFF;
            font-size: 16px;
            padding: 10px 20px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        button:Hover {
            background-color: #32be22ff;
        }
        @keyframes fade-in {
            from { opacity: 0; transform: scale(0.0); }
            to {opacity: 1; transform: scale(1.0); }            
        }
    </style>
</head>


<body>
    <div class="container">
        <h2>Listagem de Pessoas</h2>
        <table>
            <thead>
                <tr>
                    <?php
                        $cabecalho = explode(";", $linhas[0]);
                        foreach ($cabecalho as $coluna) {
                            echo "<th>".htmlspecialchars($coluna)."</th>";
                        }
                    ?>
                </tr>    
            </thead>
            <tbody>
                <?php
                    for ($i = 1; $i < count($linhas); $i++) {
                        $colunas = explode(";", $linhas[$i]);
                        echo "<tr>";
                        foreach ($colunas as $coluna) {
                            echo "<td>".htmlspecialchars($coluna)."</td>";
                        }
                        echo "</tr>";
                    }
                ?>
            </tbody>        
        </table>    

        <a href="cadastro.php">Cadastrar Dados</a>
    </div>
</body>

</html>