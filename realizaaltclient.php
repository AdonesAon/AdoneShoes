<!DOCTYPE html>
<html lang="pt-BR">
<head><title>Alteração de Cliente</title>
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
				<a href="listar_produto.php">Listar Produtos</a>
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

                <?php		
                        $id=$_POST["id"];
                        $nome=$_POST["nome"];
                        $cpf=$_POST["cpf"];
                        $tel=$_POST["tel"];
                        $email=$_POST["email"];
                        $ende=$_POST["ende"];
                        $cep=$_POST["cep"];
                        $dn=$_POST["dn"];  
                        $sql="UPDATE cliente SET id='$id',nome='$nome',cpf='$cpf',tel='$tel',email='$email',ende='$ende',cep='$cep',dn='$dn' WHERE id='$id' ";
                        $con=mysqli_connect("127.0.0.1","root","","calcados");          		
                        if (mysqli_connect_errno())	
                        { 
                            echo "Failed to connect to MySQL: " . mysqli_connect_error(); 
                        }                                   
                        mysqli_query($con,$sql);					 
                        mysqli_close($con);		
                    ?> 
                    <p>

                    <div class="page">

						<div class="alertyellow">Cliente alterado com sucesso!</div><p>

						<div class="button1"><a href="index.html">Página Inicial</a></div>
					
						<div class="button1"><a href="listar_cliente.php">Ir para Lista</a></div>
					</div>

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

