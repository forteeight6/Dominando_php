<?php

$conexao = "mysql:dbname=;host=";
$usuario_do_banco_de_dados = "";
$senha_do_banco_de_dados = "";

try
{
    $dados = new PDO($conexao, $usuario_do_banco_de_dados, $senha_do_banco_de_dados
    );
    #echo "conectado";
}
catch(PDOException $excessao)
{
    echo "Falhou: ".$excessao->getMessage();
}

?>