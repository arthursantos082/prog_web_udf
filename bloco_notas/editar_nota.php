<?php include 'conexao.php'; ?>

<?php
$id = $_GET["id"];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titulo = $_POST["titulo"];
    $conteudo = $_POST["conteudo"];

    $sql = "UPDATE notas SET titulo='$titulo', conteudo='$conteudo' WHERE id=$id";
    $conn->query($sql);
    header("Location: index.php");
    exit;
}

$sql = "SELECT * FROM notas WHERE id=$id";
$resultado = $conn->query($sql);
$nota = $resultado->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Editar Nota</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Editar Nota</h1>
<form method="POST">
    <label>Título:</label><br>
    <input type="text" name="titulo" value="<?= $nota['titulo'] ?>" required><br><br>
    <label>Conteúdo:</label><br>
    <textarea name="conteudo" rows="10" cols="50"><?= $nota['conteudo'] ?></textarea><br><br>
    <button type="submit">Salvar Alterações</button>
</form>
<a href="index.php">Voltar</a>
</body>
</html>
