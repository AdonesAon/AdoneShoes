<!DOCTYPE html>
<html lang="pt-BR">
<head><title>Cadastro de Produtos</title>
<link rel="stylesheet" type="text/css" href="estilo1.css">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oxygen&display=swap" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
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

                <?php
					$nome=$_POST["nome"];
                    $cnpj=$_POST["cnpj"];
                    $tel=$_POST["tel"];
                    $email=$_POST["email"];
					$nome_prod=$_POST["nome_prod"];
                    $quant=$_POST["quant"];
                    $valor=$_POST["valor"];
					$data=$_POST["data"];
					$sql="insert into produto(nome,cnpj,tel,email,nome_prod,quant,valor,data)
					values('$nome','$cnpj','$tel','$email','$nome_prod','$quant','$valor','$data')";
					$con=mysqli_connect("127.0.0.1","root","","calcados");
					if(mysqli_connect_errno())
					{
						echo "Failed to connect to MySQL: ".mysqli_connect_error();
					}
					mysqli_query($con,$sql);
					mysqli_close($con);
				?>

				<div class="page">
					<div class="alertgreen">Produto cadastrado com sucesso!</div><p>

					<div class="button1"><a href="index.html">VOLTAR</a></div>

					<div class="button1"><a href="listar_produto.php">Ir para Lista</a></div>
				</div>
        </div>

    </div>

    <div class="rodape">

		<div class="flex-container3">
			<img src="imagem/AdoneShoes1.png" style="width:12%;height: auto;">
			<div class="texto1">Site feito por Adônes O. do Nascimento</div>
    	</div>
		
	</div>

</body>

</html>
