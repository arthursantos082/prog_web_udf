<?php include 'conexao.php'; ?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titulo = $_POST["titulo"];
    $conteudo = $_POST["conteudo"];

    $sql = "INSERT INTO notas (titulo, conteudo) VALUES ('$titulo', '$conteudo')";
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
        exit;
    } else {
        echo "Erro: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Nova Nota</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Nova Nota</h1>
<form method="POST">
    <label>Título:</label><br>
    <input type="text" name="titulo" required><br><br>
    <label>Conteúdo: </label><br>
    <textarea name="conteudo" rows="10" cols="50"></textarea><br><br>
    <button type="submit">Salvar</button>
</form>
<a href="index.php">Voltar</a>
</body>
</html>
