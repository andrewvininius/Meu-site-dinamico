<!DOCTYPE html>
<html>
<head>
	<title>Meu Site Dinâmico</title>
</head>
<body>

	<?php
		// Definir uma variável
		$mensagem = "Bem-vindo ao meu site dinâmico!";
		
		// Imprimir a variável na página
		echo "<h1>$mensagem</h1>";
		
		// Exemplo de um loop para exibir uma lista de números
		echo "<ul>";
		for ($i = 1; $i <= 10; $i++) {
			echo "<li>$i</li>";
		}
		echo "</ul>";
	?>

</body>
</html>
