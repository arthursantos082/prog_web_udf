<?php
include 'conexao.php';
$id = $_GET["id"];
$conn->query("DELETE FROM notas WHERE id=$id");
header("Location: index.php");
exit;

?>
