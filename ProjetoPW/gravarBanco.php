<?php
include "mysqlconecta.php";
$pessoafj = $_POST['pessoafj'];
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$endereco = $_POST['endereco'];
$numero = $_POST['numero'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$cep = $_POST['cep'];
$celular = $_POST['celular'];
$email = $_POST['email'];
$obs = $_POST['obs'];

echo "Pessoa Fisica/Juridica: ".$pessoafj."<br>";
echo "Nome: ".$nome."<br>";
echo "CPF: ".$cpf."<br>";
echo "Endereco: ".$endereco."<br>";
echo "Numero: ".$numero."<br>";
echo "Bairro: ".$bairro."<br>";
echo "Cidade: ".$cidade."<br>";
echo "CEP: ".$cep."<br>";
echo "Celular: ".$celular."<br>";
echo "Email: ".$email."<br>";
echo "OBS: ".$obs."<br>";

$query = mysqli_query($conexao, "insert into cad_cliente (cli_nome, cli_razao, cli_cpf, cli_endereco, cli_numero, cli_bairro, cli_cidade, cli_cep, cli_cel, cli_email, cli_obs)
 Values('$pessoafj', '$nome', '$cpf', '$endereco', '$numero', '$bairro','$cidade','$cep','$celular','$email','$obs')") ;

$query = mysqli_query($conexao,"select cli_nome, cli_razao, cli_cpf, cli_endereco, cli_numero, cli_bairro, cli_cidade, cli_cep, cli_cel, cli_email, cli_obs from cad_cliente where cli_nome ='$nome'") or die ("erro1000");

$resultado = mysqli_num_rows($query);
$saida = mysqli_fetch_row($query);

if($resultado <> 0)
{
    echo("<br>Erro na inserção do registro. ");
    echo("<br><a href=\"index.php\">");

}
else
{
    echo("<br>Registro Inserido com sucesso. ");
    echo("<br><a href=\"index.php\">OK</a></td>");
}

?>
