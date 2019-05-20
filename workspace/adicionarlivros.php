
<head>
	<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Administrador || Adicionar Livros</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
        <nav class="navbar navbar-expand-md bg-dark navbar-light" >
            <a class="navbar-brand" href="index.html"><img src="livbriadm.png" id="logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsible-navbar" href="#collapsible-navbar">
                    <span class="navbar-toggler-icon"></span>
                    </button>
            <div class="collapse navbar-collapse" id="collapsible-navbar">
                <ul class="nav navbar">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html"><b>Início</b></a>
                    </li>
                    <li>
                        <a class="nav-link" href="#"><b>Adicionar Livros</b></a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <br><br>
    <div class="container text-center border bg-light">
		<form action="adicionarlivros.php" method='post' enctype='multipart/form-data'>
				<H3>Selecione O Arquivo</H3>
				<div class="form-group">
					<span>Imagem</span>
					<input type='file'  class="form-control" name='arquivo'>
				</div>
				<div class="form-group">
					<span>Autor</span>
					<input type="text" name="autor" class="form-control" placeholder="digite a(ous)autores">
				</div>
				<div class="form-group">
					<span>Categoria</span>
					<input type="text" name="tipo" class="form-control" placeholder="Digite a categoria do livro">
				</div>
				<div class="form-group">
					<span>Descrição</span>
					<input type="text" name="descricao" class="form-control" placeholder="digite uma descricao">
				</div>
					<br>
					<input type='submit' class="btn btn-primary" value='Enviar'>
					<input type="reset"  class="btn btn-danger" value="cancelar" name="">
		</form>
	</div>
</body>
<?php
	if($_FILES){
		$destino= "imgs/".$_FILES['arquivo']['name'];
		$tipo =$_POST['tipo'];
		$descricao= $_POST['descricao'];
		$autor=$_POST['autor'];
		move_uploaded_file($_FILES['arquivo']['tmp_name'],$destino);
		//$xml = simplexml_load_file('adicionados.xml');
		$xml=file_get_contents('adicionados.xml');
		$arquivo =fopen("adicionados.xml", "a");
		$texto = '<livros>
						<tipo>'.$tipo.'</tipo>
						<autor>'.$autor.'</autor>
						<imagem>'.$destino.'</imagem>
						<descricao>'.$descricao.'</descricao>
				</livros>';
		fwrite($arquivo, $texto);

		echo 'Livro Adicionado Com Sucesso';
		header("Location:adicionados.php");
	}	
?>
	