<html> 
	<head> 
		<title>::.Monstros SA.::</title> 
	</head> 
	<form method="POST" action="consulta_lote_pedido.php">
<center><font face="verdana, arial, helvetica" size=1><A HREF="Exercicio1.php"><img border="0" src="imagens/voltar.jpg" title="Voltar"></A></font></center> 
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
   <td align="center"><font face="verdana, arial, helvetica" size=1>Pedidos</font></td> 
   </tr> 
   <tr> 
    
</table> 


<table width="500" cellspacing="1" cellpadding="3" border="0" bgcolor="#95B2C3" align="center"> 
<tr> 
   <td bgcolor="#D2691E"><font color = "#FFFFFF" size=1 face="verdana, arial, helvetica"><b>Consulta</b></font></td> 
</tr> 
<tr> 
   <td bgcolor="#D2691E"> 

    <table width="95%" cellspacing="1" cellpadding="1" border="0" align="center"> 
<tr> 
   <td><font size=1 face="verdana, arial, helvetica"> </td>
   
<table width="500" cellspacing="1" cellpadding="3" border="0" bgcolor="#95B2C3" align="center"> 
<tr> 
   <td bgcolor="#D2691E"> 

    <table width="95%" cellspacing="1" cellpadding="1" border="0" align="center"> 
<tr> 
  			<td><h1 align="center"></h1>
			
			


			<td><h1 align="center"><font face="verdana, arial, helvetica" size=1>Consulta</h1>
			<tr> 
			<td><h3><font align= center face="verdana, arial, helvetica" size=1><b>Codigo</font></td>
   			<td><h3><font align= center face="verdana, arial, helvetica" size=1><b>Produto</font></td>
   			<td><h3><font align= center  face="verdana, arial, helvetica" size=1><b>Quantidade</font></td>  
   			<td><h3><font align= center  face="verdana, arial, helvetica" size=1><b>Valor</font></td>  
			<td><h3><font align= center  face="verdana, arial, helvetica" size=1><b>Unidade Medida</font></td>  
</tr> 	  			    
   <?php

 include "mysqlconecta.php"; 	
  


		$busca = $_POST["busca"];
		
		
 $query = mysqli_query($conexao, "SELECT e.est_id, p.pro_nome, e.est_qtd, e.est_valor, e.est_um FROM produto p, estoque e 
                                  where p.pro_id = e.est_id_pro and p.pro_nome like  \"%$busca%\" group by 1");
 
 while ($saida = mysqli_fetch_array($query))
    {    
         $codigo = $saida[0];
         $produto = $saida[1];
         $qtd = $saida[2];
         $valor = $saida[3];
		 $um = $saida[4];
         
		    		
        echo ("<tr bgcolor=#EBEAD8>");
		echo ("<td align= center><font align= center  face=\"verdana, arial, helvetica\" size=1><A HREF=consulta_escolha_pedido.php?id=".$codigo.">".$codigo); echo("</td>");
		echo ("<td><font align= center  face=\"verdana, arial, helvetica\" size=1>".$produto);echo("</A></td>");
		echo ("<td><font align= center  face=\"verdana, arial, helvetica\" size=1>".$qtd);echo("</td>");
		echo ("<td><font align= center  face=\"verdana, arial, helvetica\" size=1>".$valor);echo("</td>");
		echo ("<td><font align= center  face=\"verdana, arial, helvetica\" size=1>".$um);echo("</td>");
	}        
            
		
echo("</tr>"); 
mysqli_close ($conexao);
?>	

  			
  			
			</td> 

</tr> 
   <tr> 
   </table> 

									

   </td> 
</tr> 
</table> 

</table> 

  </td> 
 
 </tr> 
</table>



	</body> 
</html> 






