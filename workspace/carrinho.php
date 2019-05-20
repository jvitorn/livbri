<!DOCTYPE html>
<html>
<head>
	<title>LivBri | Para Quem Ama Livros</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--css-->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
	<!--js-->
    <script type="text/javascript" src="https://raw.githubusercontent.com/frexy/svg-icon-webcomponent/master/build/iconwc.js"></script>
    <script type="text/javascript" href="js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <script src="js/bootstrap.js"></script>
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
		<div class="row">
			<div class="col-md-8 offset-2">
				<br><br>
				<div class="row">
					<div class="col-md-12 bg-light text-center">
						<h3>Carrinho</h3>
					</div>
					<br><br>
					<?php
						 $xml = simplexml_load_file('livros.xml');
						 $a = $_GET['cat'];
						 $preco = "";
						  			foreach ($xml ->livro as $livros ) { 
					                    
					                       if($livros -> carrinho == $a )  {

					                            echo '<div class="col-md-4">';
					                            	echo '<div class="row">';
						                            	echo '<div class="col-md-12">';
							                                echo '<img  class="img-thumbnail" src="'.$livros -> imagem.'">';
							            					echo '<h5>'.$livros -> titulo.'</h5>';
							                                echo '<h6 style="color:red">R$:'.$livros -> preco.'</h6>';
							                            echo '</div>';
						                        	echo '</div>';
						                        echo '</div>';

					         				$preco+=$livros -> preco. " ";			                   
					                        
					                    	}
					                }
					?>
				<div class="col-md-12">&nbsp;</div>
				<div class="col-md-12">&nbsp;</div>
							<div class="col-md-8">
							<h3>Total Das Compras:</h3>
							</div>
							<div class="col-md-2">
							<h3>
							<?php
							echo "R$:".$preco;
							?>
								
							</h3>
							</div>
						
				</div>
			</div>
		</div>
	</div>
</body>
</html>