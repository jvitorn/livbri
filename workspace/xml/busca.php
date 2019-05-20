<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Busca de livros</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script type="text/javascript" src="https://raw.githubusercontent.com/frexy/svg-icon-webcomponent/master/build/iconwc.js"></script>
    <style type="text/css">
    </style>
</head>
<body>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-md bg-light navbar-light ">
            <a class="navbar-brand" href="index.html"><img src="livbri.png" id="logo"></a>
        <ul class="nav navbar">
            <li class="nav-item">
                <a class="nav-link" href="#"><b>Início</b></a>
            </li>
            <li class="nav-item" >
                <a class="nav-link" href="#"><b>Opções</b></a>
            </li>
            <li>
                <a class="nav-link" href="#"><b>Perfil</b></a>
            </li>
            <li>
                <a class="nav-link" href="#"><b>Ajuda</b></a>
            </li>
            <li>
                <a class="nav-link" href="#"><b>Pesquisa</b></a>
            </li>
            <li>
                <a class="nav-link" href="#"><b>Livros</b>
            </li>
        </ul>
        </nav>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 offset-2 text-center">
                <form class="form-inline" action="busca.php" enctype = "multipart/form-data" method = "post">
                    <div class="form-group">
                        <input class="form-control" type="text" name="busca" placeholder="busca">
                        <input class="form-control mr-md-4" type="radio" value="titulo" name="p">titulo
                        <input class="form-control mr-md-4" type="radio" value="tipo" name="p">tipo
                        <button class="btn btn-success"></button>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</body> 
<?php
    if($_POST){
        $busca=$_POST['busca'];
        $xml = simplexml_load_file('livros.xml');
        foreach ($xml ->livro as $livros ) { 
            //var_dump($livros);
            if($_POST['p']== "titulo" ){
                if($livros-> titulo == $_POST['busca']){
                    echo '<img src="' .$livros -> imagem. '" style="width:150px; height:150px;">';
                    echo "<br>";
                    echo $livros -> titulo ;
                    echo "<br>";
                    echo $livros -> descricao ;
                    echo "<br>";
                }
            }
            if($_POST['p']== "tipo" ){
                 if($livros-> tipo == $_POST['busca'] ){    
                     echo '<img src="' .$livros -> imagem. '" style="width:150px; height:150px;">';
                    echo "<br>";
                    echo $livros -> titulo ;
                    echo "<br>";
                    echo $livros -> descricao ;
                    echo "<br>";
                }
            }
        }
    }
?>
</html>