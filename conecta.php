<?php
// Dados de conexão com o banco MySQL
$host = "sql209.infinityfree.com";
$banco = "if0_43455348_joana24";
$usuario = "if0_43455348";
$senha = "fvqbJZckT3TCrDV";

try {
    // Conectando ao banco usando PDO
    $conexao = new PDO(
        "mysql:host=$host;dbname=$banco;charset=utf8",
        $usuario,
        $senha
    );

    // Configurando o modo de erros
    $conexao->setAttribute(
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION
    );

    echo "Conexão com o banco de dados realizada com sucesso!";

} catch (PDOException $e) {
    echo "Erro ao conectar ao banco de dados: " . $e->getMessage();
}
?>