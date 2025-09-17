<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        label {
            display: block;
            margin: 10px 0 5px;
            text-align: left;
            font-weight: bold;
            color: #666;
        }
        input, select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 8px;
            border: 1px solid #ccc;
            font-size: 14px;
            transition: border-color 0.3s;
        }
        input:focus , select:focus {
            border-color: #4E73DF;
            outline: none;
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
        .botao-listagem{
            margin-top: 10px    
        }

    </style>
</head>

<body>
    <div class="container">
        <h2>Cadastro de Pessoas</h2>
        <!-- Mensagens -->
        <div class="mensagem">
            <?php if (isset($_GET['msg'])) { ?>
                <p style='color: <?= $_GET['tipo'] === 'ok' ? 'green': 'red'?>;'>
                    <?= htmlspecialchars($_GET['msg']) ?> 
                </p>    
            <?php } ?>
        </div>    
        <!-- Pagina -->
        <form action="gravar.php" method="POST">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required />
            <label for="idade">Idade:</label>
            <input type="number" id="idade" name="idade" required />
            <label for="estadoCivil">Estado Civil:</label>
            <select id="estadoCivil" name="estadoCivil">
                <option value="">Selecione o Estado Civil</option>
                <option value="C">Casado(a)</option>
                <option value="S">Solteiro(a)</option>
            </select>    
            <button type="submit">Enviar</button>
        </form>
        
        <button class="botao-listagem" onclick="window.location.href='listagem.php'">Ver a Listagem</button>

    </div>

</body>

</html>    