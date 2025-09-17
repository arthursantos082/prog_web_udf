<?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $nome = trim($_POST["nome"]);
        $idade = intval($_POST["idade"]);
        $estadoCivil = trim($_POST["estadoCivil"]);

        if (!empty($nome) && $idade > 0 && !empty($estadoCivil)) {
            $linha = "$nome ; $idade ; $estadoCivil; ";
            $arquivo = "./dados.txt";
            if (file_put_contents($arquivo, $linha, FILE_APPEND)) {
                header("location: cadastro.php?msg=Registro+Gravado&tipo=ok");
                exit;
            } else{
                header("location: cadastro.php?msg=Erro+Gravação+do+Arquivo&tipo=nok");
            }
        } else {
            header("location: cadastro.php?msg=Tudo+Errado&tipo=nok");
            exit;
        }
    }

?>