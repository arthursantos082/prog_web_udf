<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gráfico de Vendas 2025</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <h1>Gráfico</h1>
    <canvas id="myChart"></canvas>

    <?php
    function lerCSV($arquivo) {
        $linhas = [];
        if (($handle = fopen($arquivo, "r")) !== FALSE) {
            //Salta linha do cabeçalho
            fgetcsv($handle, 1000, ",");
            
            //Ler as linhas
            while (($dados = fgetcsv($handle, 1000, ",")) !== FALSE) {
                $linhas[] = $dados;
            }
            fclose($handle);
        }
        return $linhas;
    }

    //Ler o arquivo
    $data = lerCSV('data.csv');

    $labels = [];
    $values = [];
    
    foreach ($data as $row) {
        $labels[] = $row[0];
        $values[] = $row[1];
    }
    ?>

    <script>
        var ctx = document
            .getElementById('myChart')
            .getContext('2d');

        var meuGraf = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: <?php echo json_encode($labels); ?>,
                datasets: [{
                    label: 'Valores',
                    data: <?php echo json_encode($values); ?>,
                    backgroundColor: 'rgba(75, 192, 192, 0.6)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1,
                }],
            }
        });
    </script>
</body>
</html>