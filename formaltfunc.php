<!DOCTYPE html>
<html lang="pt-BR">
<head><title>Alterar Funcionário</title>
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

            <div class="caixa">

                <div class="page">

                    <?php	
                        $id=$_POST['id'];	
                        $con=mysqli_connect("127.0.0.1","root","","calcados"); 
                        if(mysqli_connect_errno()){ 
                            echo "Failed to connect to MySQL:" . mysqli_connect_error();
                        }	
                        $result = mysqli_query($con,"SELECT * FROM funcionario WHERE id='$id' ");	
                    ?><p>
                        
                    <form action="realizaaltfunc.php" method="POST" class="formDados">
                        <?php 
                            while($row = mysqli_fetch_array($result))  {
                        ?>	
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>"/>	
                        <div class="flex-container">
                            <a href="listar_funcionario.php"><img src="imagem/voltar.png"></button></a>
                        </div>
                        <div class="titulo">Alterar Funcionário</div> <p>
                        <div class="texto1">Informe seus dados abaixo:</div><br>
                        <label for="nome">Nome completo:<br>
                        <input type="text" name="nome" placeholder="Digite seu nome completo" maxlength="200" autofocus="on" required value="<?php echo $row['nome']; ?>" /></label>
                        <label for="cpf">CPF:<br>
                        <input type="text" name="cpf" placeholder="111.222.333-44" pattern="[0-9]{3}.[0-9]{3}.[0-9]{3}-[0-9]{2}" title="Apenas números. Sem pontuação!" maxlength="14" autocomplete="off" required value="<?php echo $row['cpf']; ?>" /></label>
                        <label for="tel">Telefone:<br>
                        <input type="text" name="tel" placeholder="61999998888" pattern="[0-9]{11}" title="Apenas números. Sem pontuação!" maxlength="11" autocomplete="off" required value="<?php echo $row['tel']; ?>" /></label>
                        <label for="email">E-mail:<br>
                        <input type="email" name="email" placeholder="Digite seu e-mail" maxlenth="200" required value="<?php echo $row['email']; ?>" /></label>
                        <label for="ende">Endereço:<br>
                        <input type="text" name="ende" placeholder="Informe seu endereço" maxlength="200" autocomplete="off" required value="<?php echo $row['ende']; ?>" /></label>
                        <div class="texto1">Informe seu sexo:</div><br>
                        <div class="flex-container1">
                        <label>Masculino<input type="radio" name="sexo" value="M<?php echo $row['sexo']; ?>" /></label>
                        <label>Feminino<input type="radio" name="sexo" value="F<?php echo $row['sexo']; ?>" /></label>
                        </div><br>
                        <label for="dn">Data de Nascimento:<br>
                        <input type="date" id="dn" name="dn" required value="<?php echo $row['dn']; ?>" /></label>
                        
                        <input type="reset" value="Limpar" class="btn" />
                        <input type="submit" value="Alterar" class="btn" />
                    </form>
                    <?php } ?>

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