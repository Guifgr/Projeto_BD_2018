<?php
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$destino = $_GET['Dest'];
		$partida = $_GET['Part'];
	}


?>
<html>
<head>
     <title>Compra!</title>
        <link href="styletwo.css" rel="stylesheet">
        <meta charset="utf-8">
</head>
  <body>
  	<?php echo '<h1>Você escolheu ir para '.$destino.' saindo de '.$partida.'.</h1>'; ?>
  </body>
</html>