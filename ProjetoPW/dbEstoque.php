<?php
include "mysqlconecta.php";

$produto = $_POST['produto'];
$qtd = $_POST['qtd'];
$um = $_POST['um'];
$valor = $_POST['valor'];


echo "Nome do Produto: ".$produto."<br>";
echo "Nome do Produto: ".$qtd."<br>";
echo "Nome do Produto: ".$um."<br>";
echo "Nome do Produto: ".$valor."<br>";

$query = mysqli_query($conexao, "insert into estoque (est_id_pro, est_qtd, est_um, est_valor) Values( '$produto', '$qtd', '$um', '$valor')") ;

$query = mysqli_query($conexao,"select est_id_pro, est_qtd, est_um, est_valor from estoque where est_id_pro ='$produto'") or die ("erro1000");

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
