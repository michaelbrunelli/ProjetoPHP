<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="suamae.css">
    <title>Localizador do Lote</title>
</head>
<body>
   
        


<table width="150px" border="3" align="center">
      <tr bgcolor=#101474>
      <td><font align= center  face=\"verdana, arial, helvetica\">Código</td>
       <td><font align= center  face=\"verdana, arial, helvetica\">Produto</td>
        <td><font align= center  face=\"verdana, arial, helvetica\">QTD</td>
        <td><font align= center  face=\"verdana, arial, helvetica\">Valor</td>
        <td><font align= center  face=\"verdana, arial, helvetica\">Unidade Medida</td> 
<?php

include "mysqlconecta.php";

$busca = $_POST["busca"];


$query = mysqli_query($conexao, "SELECT e.est_id, p.pro_nome, e.est_qtd, e.est_valor, e.est_um FROM cad_produtos p, estoque e where p.pro_cod = e.est_id_pro and p.pro_nome like \"%$busca%\" group by 1");
while ($saida = mysqli_fetch_array($query))
    {
        $id = $saida[0];
        $produto = $saida[1];
        $qtd = $saida[2];
        $valor = $saida[3];
        $um = $saida[4];

        echo ("<tr bgcolor=	(79,79,79) ");
        echo ("</td>");
        echo ("<td><font align= center  face=\"verdana, arial, helvetica\">" .$id); echo("</td>");
        echo ("<td><font align= center  face=\"verdana, arial, helvetica\">" .$produto); echo("</td>");
        echo ("<td><font align= center  face=\"verdana, arial, helvetica\">" .$qtd); echo("</td>");
        echo ("<td><font align= center  face=\"verdana, arial, helvetica\">" .$valor); echo("</td>");
        echo ("<td><font align= center  face=\"verdana, arial, helvetica\">" .$um); echo("</td>"); 
    }

    echo ("</tr>");
    mysqli_close ($conexao);
?>

</tr>
</table>
</body>
</html>
