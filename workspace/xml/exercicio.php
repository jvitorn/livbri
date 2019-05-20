<meta charset="utf-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style type="text/css">
</style>
<?php
	$link = "livros.xml";
	$xml = simplexml_load_file($link) -> livro;
		foreach ($xml -> arte as $arte){
			echo '<div class="row"><div class ="container-fluid"><div class="jumbotron">';
			echo '<div class="col-md-4 offset-4 float-left">';
			echo '<div class="card" style="width: 18rem;">';
			echo '<img class= "card-img-top" src="'.$arte -> imagem.'" style="width:286px; height:180px;"><br>';
			echo '<div class="card-body">';
			echo '<h5 class="card-title">'.$arte -> titulo.'</h5>';
			echo '<p class="card-text">'.$arte -> descricao.'</p>';
  			echo "</div></div></div></div></div></div></div>";
		}
?>