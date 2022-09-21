<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Localizador do Lote</title>
</head>
<body>
   
        


<table>
      <tr bgcolor=#0000FF>
       <td><font align= center  face=\"verdana, arial, helvetica\" size=1>Produto</td>
        <td><font align= center  face=\"verdana, arial, helvetica\" size=1>QTD</td>
        <td><font align= center  face=\"verdana, arial, helvetica\" size=1>Valor</td>
        <td><font align= center  face=\"verdana, arial, helvetica\" size=1>Unidade Medida</td> 
<?php

include "mysqlconecta.php";

$busca = $_POST["busca"];


$query = mysqli_query($conexao, "SELECT p.pro_nome, e.est_qtd, e.est_valor, e.est_um FROM cad_produtos p, estoque e where p.pro_cod = e.est_id_pro and p.pro_nome like \"%$busca%\" group by 1");
while ($saida = mysqli_fetch_array($query))
    {
        $produto = $saida[0];
        $qtd = $saida[1];
        $valor = $saida[2];
        $um = $saida[3];

        echo ("<tr bgcolor=#4169E1");
        echo ("</td>");
        echo ("<td><font align= center  face=\"verdana, arial, helvetica\" size=1>" .$produto); echo("</td>");
        echo ("<td><font align= center  face=\"verdana, arial, helvetica\" size=1>" .$qtd); echo("</td>");
        echo ("<td><font align= center  face=\"verdana, arial, helvetica\" size=1>" .$valor); echo("</td>");
        echo ("<td><font align= center  face=\"verdana, arial, helvetica\" size=1>" .$um); echo("</td>"); 
    }

    echo ("</tr>");
    mysqli_close ($conexao);
?>
</tr>
</table>
</body>
</html>

