<html> 
	<head> 
		<title>::.Monstro S.A.::</title>
	</head> 
	<meta charset = "utf8">
	<center><font face="verdana, arial, helvetica" size=1><A HREF="Exercicio1.php"><img border="0" src="imagens/voltar.jpg" title="Voltar"></A></font></center> 
	<table width="518" cellspacing="1" cellpadding="3" border="0" bgcolor="#FFFFFF" align="center"> 
		<tr>
			<td bgcolor="#047AC4"><font color = "#FFFFFF" size=1 face="verdana, arial, helvetica">::.Sistema Monstro S.A</td> 
		</tr>
	</table>
	<table width="518" cellspacing="1" cellpadding="3" border="0" bgcolor="#047AC4" align="center"> 
		<tr> 
			<td align="center" bgcolor="#047AC4"><font color = "#FFFFFF" size=1 face="verdana, arial, helvetica"><b>
				<h3></h3></b></font>
			</td> 
		</tr> 
		<tr> 
			<td bgcolor="#047AC4"> 

		<table width="95%" cellspacing="1" cellpadding="1" border="0" align="center"> 
			<tr> 
				<td align="center"><font face="verdana, arial, helvetica" size=1>PDV</font></td> 
			</tr> 
			<tr> 
    
		</table> 

		<table width="500" cellspacing="1" cellpadding="3" border="0" bgcolor="#047AC4" align="center"> 
			<tr> 
				<td bgcolor="#047AC4"><font color = "#FFFFFF" size=1 face="verdana, arial, helvetica"><b>Venda</b></font></td> 
			</tr> 
			<tr> 
				<td bgcolor="#047AC4"> 

					<table width="95%" cellspacing="1" cellpadding="1" border="0" align="center"> 
						<tr> 
							<td><font size=1 face="verdana, arial, helvetica"> </td>
   
								<table width="500" cellspacing="1" cellpadding="3" border="0" bgcolor="#95B2C3" align="center"> 
									<tr> 
										<td bgcolor="#FFF09E"> 

											<table width="95%" cellspacing="1" cellpadding="1" border="0" align="center"> 
												<tr> 
													<td><h1 align="center"></h1>
														<td><h1 align="center"><font face="verdana, arial, helvetica" size=1>Confirmar venda</h1>
															<?php	
				
																$codigo = $_POST['codigo'];
																$produto = $_POST['produto'];
																$qtd = $_POST['qtd'];
																$valor = $_POST['valor'];
																$um = $_POST['um'];
																$compra = $_POST['compra'];
																
																$total_produto =  $compra * $valor;
																
																$baixa = $qtd - $compra;
																
																echo "--------------------------------------------------------------------------------------<br>";
																echo "Código................: ".$codigo."<br>";
																echo "Produto................: ".$produto."<br>";
																echo "Quantidade em estoque....: ".$qtd."<br>";
																echo "Valor...............: ".$valor."<br>";
																echo "Unidade Medida.........: ".$um."<br>";
																echo "--------------------------------------------------------------------------------------<br>";
																echo "Quantidade Comprada......: ".$compra."<br>";
																echo "Valor Total......: ".$total_produto."<br>";
																echo "Quantidade em estoque Atual....: ".$baixa."<br>";
																echo "--------------------------------------------------------------------------------------";
 
																include "mysqlconecta.php"; 	
				
				
																$query = mysqli_query($conexao,"update estoque set est_qtd = '$baixa' where est_id = '$codigo'");
																				                      
																
																
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
