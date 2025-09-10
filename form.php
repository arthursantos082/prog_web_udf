<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula05</title>
</head>
<body>
    
    <div class="container" style="text-align: center;">
        <h2>Cadastro de Pessoas</h2>
        <!--Mensagens-->
        
        <div class="mensagem">
            <?php 
            if (isset($_GET['msg'])) { ?>
                <p style='color: <?= $_GET['tipo'] === 'ok' ? 'green': 'red'?>;'>
            <?php } ?>
        </div>

        <form action="processa.php" method="POST">
            <label for="nome">Nome: </label>
            <input type="text" id="nome" name="nome" require />
            <label for="idade">Idade: </label>
            <input type="number" id="idade" name="idade" require />
            <label for="estadoCivil">Estado Civil: </label>
            <select name="estadoCivil" id="estadoCivil">
                <option value="">Selecione o Estado Civil</option>
                <option value="C">Casado(a)</option>
                <option value="S">Solteiro(a)</option>
            </select>
            <button type="submit">Enviar</button>
        </form>
    </div>

</body>
</html>