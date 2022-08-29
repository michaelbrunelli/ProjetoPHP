<?php

$servidor = "127.0.0.1";
$usuario = "root";
$senha = "";
$bancoDados = "etec";

$conexao = mysqli_connect($servidor,$usuario,$senha,$bancoDados);

if (mysqli_connect_errno($conexao)) {
    echo"problemas para conectar com o banco, verifique os dados";
}
?>
