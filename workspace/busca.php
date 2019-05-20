<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Livbri | Busca de livros</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script type="text/javascript" href="js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://raw.githubusercontent.com/frexy/svg-icon-webcomponent/master/build/iconwc.js"></script>
    <style type="text/css">
    </style>
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
    <br><br>
    <div class="container">  
            <h2 class="text-center">Pesquisa</h2>
            <h4 class="text-center">Por</h4>
                <form class="form-inline form-group" action="busca.php" enctype = "multipart/form-data" method = "post">  
                        <div class="col-md-8 offset-2">
                                <div class="form-check-inline float-left">
                                    <input class="form-check-input" type="radio" value="titulo" name="p">
                                    <label><b>titulo</b></label>
                                </div> 
                                <div class="form-check-inline float-right">
                                    <input class="form-check-input" type="radio" value="tipo" name="p" checked>
                                    <label><b>tipo</b></label>
                                </div>
                                <br><br>
                                <div class="form-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">@</span>
                                    </div>
                                    <input class="form-control col-md-11 text-center" type="text" name="busca" placeholder="busca">
                                </div>
                                <br>
                                <button  type="submit" class="btn btn-primary">Enviar</button> 
                        </div>
                </form> 
    </div>
</body> 
<?php
    if($_POST){
        $busca=$_POST['busca'];
        $xml = simplexml_load_file('livros.xml');
        echo '<div class="jumbotron">';
        echo '<div class="row">';
        echo '<div class="col-md-8 offset-2">';

            foreach ($xml ->livro as $livros ) { 
                if($_POST['p']== "titulo" ){
                    if($livros-> titulo == $_POST['busca']){

                        echo '<div class="col-md-5">';
                            echo '<img  class="img-thumbnail float-left" src="' .$livros -> imagem. '" style="width:100%; height:100%;;">';
                        echo '</div>';
                        echo '<div class="col-md-6 float-left">';
                            echo '<h4> '.$livros -> titulo.'</h4>';
                            echo "<br>";
                            echo $livros -> descricao ;
                            echo "<br>";
                        echo '</div>';
                    }
                }
                if($_POST['p']== "tipo" ){
                     if($livros-> tipo == $_POST['busca'] ){

                        echo '<div class="col-md-5">';
                            echo '<img  class="img-thumbnail float-left" src="' .$livros -> imagem. '" style="width:100%; height:100%;;">';
                        echo '</div>';
                        echo '<div class="col-md-6 float-left">';
                            echo '<h4> '.$livros -> titulo.'</h4>';
                            echo "<br>";
                            echo $livros -> descricao ;
                            echo "<br>";
                        echo '</div>';
                    }
                }
            }
        echo "</div></div></div>";
    }
?>
</html>