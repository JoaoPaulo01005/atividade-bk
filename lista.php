<?php
include "conecta.php";
$sql = "SELECT * FROM aluno";
$stmt = $conexao->prepare($sql);
$stmt->execute();
while ($linha = $stmt->fetch()) {
    echo"<table>";
    echo"<tr><th>Nome</th></tr><tr><th>CPF</th></tr>";
    echo "<tr><td>" . $linha['nome'] . "</td><td>" . $linha['cpf'] . "</td></tr>";
    echo"</table>";
}
?>