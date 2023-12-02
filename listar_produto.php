<!DOCTYPE html>
<html lang="pt-BR">
<head><title>Lista de Produtos Cadastrados</title>
<link rel="stylesheet" type="text/css" href="estilo1.css">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oxygen&display=swap" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" type="image/x-icon" href="imagem/favicon.ico">
<meta charset="UTF-8">
</head>

<body> 
    
    <div class="topo">
        <a href="index.html"><img src="imagem/AdoneShoes1.png" style="max-width: 250px;height: auto;"></a>
	</div>
    
    <div class="linha">

        <div class="totalcolumn">

            <div id="mySidenav" class="sidenav" style="float:left;margin-left:0px;">
				<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a href="index.html"><strong>Página Inicial</strong></a>
				<a href="cliente.html">Cadastrar Cliente</a>
				<a href="funcionario.html">Cadastrar Funcionário</a>
				<a href="produto.html">Cadastrar Produtos</a>
				<a href="listar_cliente.php">Listar Clientes</a>
				<a href="listar_funcionario.php">Listar Funcionários</a>
			</div>
	  
			<div id="main">
				<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;Menu</span>
			</div>
	
			<script>
				function openNav() {
				  	document.getElementById("mySidenav").style.width = "250px";
				  	document.getElementById("main").style.marginLeft = "250px";
				}
				
				function closeNav() {
				 	 document.getElementById("mySidenav").style.width = "0";
				 	 document.getElementById("main").style.marginLeft= "0";
				}
			</script>
			

			<div class="page">

				<?php $con=mysqli_connect("localhost","root","","calcados"); 
					if (mysqli_connect_errno())  
					{  
						echo "Failed to connect to MySQL: " . mysqli_connect_error();  
					}
					$result = mysqli_query($con,"SELECT * FROM produto");?><p>
					<h2>Produtos Cadastrados</h2>
						<table>	
							<tr>
								<th> ID </th> 
								<th> Nome do Fornecedor</th> 
								<th> CNPJ </th> 
								<th> Telefone </th> 
								<th> E-mail </th> 
								<th> Nome do Produto </th> 
								<th> Quantidade </th>
								<th> Valor Unitário (R$) </th>
                                <th> Data de chegada </th>
								<th> Deleta </th>
								<th> Altera </th>
							</tr>
							<?php while($row = mysqli_fetch_array($result)){ ?>  	
							<tr>	
								<td><?php echo $row['id']; ?></td>	
								<td><?php echo $row['nome']; ?></td>
								<td><?php echo $row['cnpj']; ?></td>
								<td><?php echo $row['tel']; ?></td>
								<td><?php echo $row['email']; ?></td>  
								<td><?php echo $row['nome_prod']; ?></td> 
								<td><?php echo $row['quant']; ?></td>      
								<td><?php echo $row['valor']; ?></td>
                                <td><?php echo $row['data']; ?></td>
								<td><form action="realizadelprod.php" method="post">					 
									<input type="hidden" name="id" value="<?php echo $row["id"]; ?>"/>			 
									<button type="submit" name="botdelprod" value="ok" class="btn1">Deletar</button>		         
									</form></td>
								<td><form action="formaltprod.php" method="post">				            
									<input type="hidden" name="id" value="<?php echo $row["id"]; ?>"/>		            
									<button type="submit" name="botaltprod" value="ok" class="btn2">Alterar</button>		         
									</form></td>
							</tr>
							<?php } 	
								mysqli_close($con);
							?>   
						</table></p>

			</div>
			</div>

		</div>

	</div>

	<div class="rodape">

		<div class="flex-container1">
			<img src="imagem/AdoneShoes1.png" style="max-width:150px;height: auto;">

			<div class="texto1">Site feito por Adônes O. do Nascimento.</div><p>
			<div class="texto1">Este site foi desenvolvido para fins acadêmicos.</div><p>
			<div class="texto1">AdoneShoes &trade; 2023-2023</div>

    	</div>
		
	</div>

</body>

</html>

