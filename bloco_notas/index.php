<?php include 'conexao.php'; ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bloco de notas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Bloco de notas</h1>
<a href="nova_nota.php" class="botao">+ Nova Nota</a>

<table>
    <tr>
        <th>Título</th>
        <th>Conteúdo</th>
        <th>Data</th>
        <th>Ações</th>
    </tr>

    <?php
    $sql = "SELECT * FROM notas ORDER BY data_criacao DESC";
    $resultado = $conn->query($sql);

    if ($resultado->num_rows > 0) {
        while ($nota = $resultado->fetch_assoc()) {
            echo "<tr>";
            echo "<td>{$nota['titulo']}</td>";
            echo "<td>{$nota['conteudo']}</td>";
            echo "<td>{$nota['data_criacao']}</td>";
            echo "<td>
                    <a href='editar_nota.php?id={$nota['id']}'>Editar</a> |
                    <a href='excluir_nota.php?id={$nota['id']}' onclick='return confirm(\"Deseja excluir?\")'>Excluir</a>
                  </td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='3'>Nenhuma nota cadastrada.</td></tr>";
    }
    ?>
</table>

<footer>
    &copy; 2025 Bloco de Notas. Todos os direitos reservados.
</footer>

</body>
</html>