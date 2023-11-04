<?php
include("conexao.php");

if(isset($_POST["email"]) || isset( $_POST["senha"])){
    if(strlen($_POST["email"]) == 0){
        echo 'Preencha seu email';
    }else if(strlen($_POST['senha']) == 0){
        echo 'Preencha sua senha';
        
}
};
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
<title>Login</title>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css2?family=Oxygen&display=swap" rel="stylesheet">
<link rel="stylesheet" href="login.css">
</head>
<body>

    <div class="topo">
        <a href="index.html"><img src="imagem/AdoneShoes1.png" style="width: 20%;height: auto;"></a>
    </div>
	
    <div class="menu">
		<a href="#">Tênis Esportivos</a>
		<a href="#">Sapatos Casuais</a>
		<a href="#">Sapatos Sociais</a>
		<a href="#">Sandálias</a>
		<a href="#">Acessórios</a>
    </div>
    
    <div class="linha">

        <div class="totalcolumn">

            <div class="card">

                <div class="caixa">

                <div class="page">

                <form method="POST" class="formLogin" action="">

                <div class="flex-container">
                <a href="login.html"><img src="imagem/voltar.png"></button></a>
                </div>

                    <div class="titulo">Login Funcionario</div> <p>
                    <div class="texto1">Digite os seus dados de acesso no campo abaixo.</div>
                    <label for="email">E-mail</label>
                    <input type="email" placeholder="Digite seu e-mail" autofocus="on" />
                    <label for="password">Senha</label>
                    <input type="password" placeholder="Digite sua senha" />
                    <a href="/">Esqueci minha senha</a>
                    <div class="texto1">Não possui cadastro? Clique no link abaixo.</div>
                    <a href="cadastro.html">Cadastre-se</a>
                    <input type="submit" value="Acessar" class="btn" />
                </form>
                
                </div>

                </div>
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