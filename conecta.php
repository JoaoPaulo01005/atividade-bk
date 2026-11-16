<?php 
$host = "sql310.infinityfree.com";
$banco = "if0_43395360_meu_banco";
$usuario = "if0_43395360";
$senha = "F2BLNoOUsN1";
//comentario 
try {
    $conexao = new PDO ("mysql:host=$host; dbname=$banco;charset=utf8", $usuario, $senha);
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexão com o banco de dados realizada com sucesso!";
}catch (PDOException $e) {
    echo "Erro ao conectar ao banco de dados: " . $e->getMessage();
}

?>