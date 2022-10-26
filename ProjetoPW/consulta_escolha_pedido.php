


<html> 
	<head> 
		<title>::.Monstros SA.::</title> 
	</head> 
	<form method="POST" action="compra.php">
<center><font face="verdana, arial, helvetica" size=1><A HREF="consulta_lote_pedido.php"><img border="0" src="imagens/voltar.jpg" title="Voltar"></A></font></center> 
<table width="518" cellspacing="1" cellpadding="3" border="0" bgcolor="#FFFFFF" align="center"> 
<tr>
	<td bgcolor="#D2691E"><font color = "#FFFFFF" size=1 face="verdana, arial, helvetica">::.Monstros SA.::</td> 

</tr>

</table>
<table width="518" cellspacing="1" cellpadding="3" border="0" bgcolor="#95B2C3" align="center"> 
<tr> 
   <td align="center" bgcolor="#D2691E"><font color = "#FFFFFF" size=1 face="verdana, arial, helvetica"><b>
      <h3></h3></b></font></td> 
</tr> 
<tr> 
   <td bgcolor="#D2691E"> 

    <table width="95%" cellspacing="1" cellpadding="1" border="0" align="center"> 
<tr> 
   <td align="center"><font face="verdana, arial, helvetica" size=1>Consulta Pedido</font></td> 
   </tr> 
   <tr> 
    
</table> 


<table width="500" cellspacing="1" cellpadding="3" border="0" bgcolor="#95B2C3" align="center"> 
<tr> 
   <td bgcolor="#D2691E"><font color = "#FFFFFF" size=1 face="verdana, arial, helvetica"><b>Consulta</b></font></td> 
</tr> 
<tr> 
   <td bgcolor="#EBEAD8"> 

    <table width="95%" cellspacing="1" cellpadding="1" border="0" align="center"> 
<tr> 
   <td><font size=1 face="verdana, arial, helvetica"> </td>
   
<table width="500" cellspacing="1" cellpadding="3" border="0" bgcolor="#95B2C3" align="center"> 
<tr> 
   <td bgcolor="#D2691E"> 

    <table width="95%" cellspacing="1" cellpadding="1" border="0" align="center"> 
<tr> 
  	<table>    
	<tr bgcolor="#EBEAD8">   
		<td><h3><font align= center face="verdana, arial, helvetica" size=1><b>Codigo</font></td>
   		<td><h3><font align= center face="verdana, arial, helvetica" size=1><b>Produto</font></td>
   		<td><h3><font align= center  face="verdana, arial, helvetica" size=1><b>Quantidade</font></td>  
   		<td><h3><font align= center  face="verdana, arial, helvetica" size=1><b>Valor</font></td>  
		<td><h3><font align= center  face="verdana, arial, helvetica" size=1><b>Unidade Medida</font></td>
		
	</tr>
	
	
<?php
	 include "mysqlconecta.php"; 	

	$id = $_GET["id"];
	
	$query = mysqli_query($conexao,"SELECT e.est_id, p.pro_nome, e.est_qtd, e.est_valor, e.est_um FROM produto p, estoque e 
                                    where e.est_id = '$id' and e.est_id_pro = p.pro_id") or die ("erro1000");
	
	$totanota = 0;	
    while ($saida = mysqli_fetch_array($query))
    {    
        
         $codigo = $saida[0];
         $produto = $saida[1];
         $qtd = $saida[2];
         $valor = $saida[3];
		 $um = $saida[4];
	     
			 

    echo ("<tr> <tr bgcolor=#EBEAD8>   ");   
	
		echo ("<td align= center><INPUT TYPE = Text NAME= codigo value = ".$codigo); echo(">");
		echo ("<td align= center><INPUT TYPE = Text NAME= produto value = ".$produto); echo(">");
		echo ("<td align= center><INPUT TYPE = Text NAME= qtd value = ".$qtd); echo(">");
		echo ("<td align= center><INPUT TYPE = Text NAME= valor value = ".$valor); echo(">");
		echo ("<td align= center><INPUT TYPE = Text NAME= um value = ".$um); echo(">");
		
	
	echo ("</tr>");
	}
?>
	
    <td><h3><font align= center face="verdana, arial, helvetica" size=1><b>Quantidade a Comprar: </b></font>
	<h1 align="center"><INPUT TYPE = Text NAME="compra" SIZE= 30 style="background-color: #D2691E"><INPUT TYPE=SUBMIT VALUE="OK"> </h1></td>
   
</table>
</table>
</table>
</table>
</table>
</table>

</table>

</body> 
</html> 