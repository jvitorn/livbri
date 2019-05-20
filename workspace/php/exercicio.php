<meta charset="utf-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style type="text/css">
</style>
<?php
	$link = "livros.xml";
	$xml = simplexml_load_file($link) -> livro;
		foreach ($xml -> hq as $hq){
			echo '<div class="col-md-3">';
			echo '<div class="card" style="width: 18rem;">';
			echo '<img class= "card-img-top" src="'.$hq -> imagem.'" style="width:286px; height:180px;"><br>';
			echo '<div class="card-body">';
			echo '<h5 class="card-title">'.$hq -> titulo.'</h5>';
			echo '<p class="card-text">'.$hq -> descricao.'</p>';
  			echo "</div></div></div></div>";
		}
?>