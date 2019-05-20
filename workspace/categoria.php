<head>
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
<body class="bg-info" id="legenda">
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
	<br>
	<div class="container">
		<?php
			 $xml = simplexml_load_file('livros.xml');
			 $a = $_GET['cat'];
			  echo '<div class="jumbotron fluid">';
		      echo '<div class="row">';
		      echo '<div class="col-md-12">';
		      echo '<div class="row">';
		      echo '<div class="col-md-8 offset-2">';
		      	echo '<h2 class="bg-info text-center" id="legenda">Livros de  '.$a.'</div>';
		      	echo '<br><br><br>';

			  			foreach ($xml ->livro as $livros ) { 
		                    
		                       if($livros -> tipo == $a )  {

		                            echo '<div class="col-md-5">';
		                                echo '<img  class="img-thumbnail float-left" src="' .$livros -> imagem. '" style="width:100%;">';
		                            echo '</div>';
		                            echo '<div class="col-md-7 float-left">';
		                                echo '<h4> '.$livros -> titulo.'</h4>';
		                                echo "<br>";
		                                echo $livros -> descricao ;
		                                echo "<br>";
		                                echo '<h2 style="color:red">R$:'.$livros -> preco.'</h2>';
		                                echo '<div class="row">';
		                                	echo '<div class="col-md-12">';
		                                		echo '<button class="btn btn-danger">Carrinho</button>';
		                                echo '</div></div>';
		                            echo '</div>';
		                            echo '<div class="col-md-12">&nbsp;</div>';
		                            echo '<div class="col-md-12">&nbsp;</div>';
		                        
		                    	}
		                }
		      echo "</div></div></div></div></div>";
		?>
	</div>
	
</body>

	?>