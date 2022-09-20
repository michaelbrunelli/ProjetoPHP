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

$query = mysqli_query($conexao, "insert into cad_fornecerdor (for_nome, for_razao, for_cnpj, for_endereco, for_numero, for_bairro, for_cidade, for_cep, for_cel, for_email, for_obs)
Values( '$nome', '$cnpj', '$endereco', '$numero', '$bairro','$cidade','$cep','$celular','$email','$obs')") ;

$query = mysqli_query($conexao,"select for_nome,  for_cnpj, for_endereco, for_numero, for_bairro, for_cidade, for_cep, for_cel, for_email, for_obs from cad_fornecedor where for_nome ='$nome'") or die ("erro1000");

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
