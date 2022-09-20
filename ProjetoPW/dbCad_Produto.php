<?php
include "mysqlconecta.php";

$produto = $_POST['nproduto'];


echo "Nome do Produto: ".$produto."<br>";

$query = mysqli_query($conexao, "insert into cad_produtos (pro_nome)
Values( '$produto')") ;

$query = mysqli_query($conexao,"select pro_nome from cad_produtos where pro_nome ='$produto'") or die ("erro1000");

$resultado = mysqli_num_rows($query);
$saida = mysqli_fetch_row($query);

if($resultado <> 0)
{
    echo("<br>Registro Inserido com sucesso. ");     
    echo("<br><a href=\"index.php\">");

}
else
{
  echo("<br>Erro na inserção do registro. ");
  echo("<br><a href=\"index.php\">OK</a></td>");
}

?>
