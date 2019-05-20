
<!DOCTYPE html>
<html>
<head><title>LivBri | Para Quem Ama Livros</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--css-->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!--js-->
    <script type="text/javascript" src="https://raw.githubusercontent.com/frexy/svg-icon-webcomponent/master/build/iconwc.js"></script>
    <script type="text/javascript" href="js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container-fluid">
            <nav class="navbar navbar-expand-md bg-light navbar-light">
                <a class="navbar-brand" href="index.html"><img src="livbri.png" id="logo"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsible-navbar" href="#collapsible-navbar">
                    <span class="navbar-toggler-icon"></span>
                    </button>
            <div class="collapse navbar-collapse" id="collapsible-navbar">
                <ul class="nav navbar">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html"><b>Início</b></a>
                    </li>
                    <li>
                        <a class="nav-link" href="perfil.php"><b>Perfil</b></a>
                    </li>
                    <li>
                        <a class="nav-link" href="adicionados.php"><b>Recentemente Adicionados</b></a>
                    </li>
                    <li>
                        <a class="nav-link" href="busca.php"><b>Pesquisa</b></a>
                    </li>
                    <li>
                        <a class="nav-link" href="livros.html"><b>Livros</b></a>
                    </li>
                    
                </ul>
            </div>
            </nav>
    </div>
     <div class="container">  
     		<div class="col-md-12">&nbsp;</div>
     		<div class="col-md-12">&nbsp;</div>
     		<div class="jumbotron">
     			<img src="svg/si-glyph-person-2.svg" class="glyphicon col-md-6 offset-3">

                <form class="form-inline form-group" action="perfil.php" enctype = "multipart/form-data" method = "post">  
                        <div class="col-md-6 offset-3">
	                                <br><br>
	                                <div class="form-group">
	                                    <input class="form-control col-md-12 text-center" type="text" name="name" placeholder="Digite O Nome De Usuário">
	                                </div>
	                                <br><br>
	                                <div class="form-group">
	                                    <input class="form-control col-md-12 text-center" type="password" name="senha" placeholder="Digite Sua senha">
	                                </div>
	                                <br>
	                                <div class="form-check-inline float-left">
	                                    <input class="form-check-input" type="radio" value="lembrar-me" name="lembrar">
	                                    <label><b>Lembrar-me</b></label>
	                                </div> 
	                                <button  type="submit" class="btn btn-dark col-md-6 float-right">Entrar</button> 
	                                <br><br><br>
	                                <?php
										if($_POST){
												if($_POST['name'] =='user' && $_POST['senha'] =='1234'){
												$redirecionar="carrinho.php?cat=carrinho";
												 		header("Location: $redirecionar");
												}
												else{
													echo '<h6 class="bg-danger text-center">Dados Inseridos Incorretamentes</h6>';
												}
												if($_POST['name'] =='adm' && $_POST['senha'] =='1234'){
												$redirecionar="adm.html";
												 		header("Location: $redirecionar");
												}
										}
									?>
	                        		<a href="index.html">Voltar Para Home</a>
	                        		

	                   </div>
                </form> 
            </div>
    </div>
</body>
<script>
	$(document).ready(function(){
    $("#btn1").click(function(){
        alert("Text: " + $("#test").text());
    });
</script>
</html>