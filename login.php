<?php
include "conecta.php";

$cpf = $_POST["cpf"];
$senha = $_POST["senha"];

$sql = "SELECT * FROM aluno WHERE cpf = :cpf AND senha = :senha";
try {
    $stmt = $conexao->prepare($sql);

    $stmt->bindParam(':cpf', $cpf);
    $stmt->bindParam(':senha', $senha);
    $stmt->execute();

if ( $linha = $stmt->fetch() ) { // fetch() retorna false se não tiver linhas
    echo "Login bem-sucedido!";
} else {
    echo "CPF ou senha incorretos.";
}
} catch (PDOException $e) {
    echo "Erro ao executar consulta: " . $e->getMessage();
}

?>