<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="Css/style.css"/>
</head>
<body>
	<center>
		<h1 class="titulo">T-Virus</h1>
		<form method="post" action="login.php" id="formlogin" name="formlogin">
			<samp class="requesito">USUARIO : </samp><input class="idlogin" required type="text" name="aluno"><br>
			<samp class="requesito">SENHA : </samp><input class="idlogin" required type="password" name="senha"><br>
			<button class="login">Entrar</button>
		</form>
		<div class="informacoesErradas">
			<h3 class="titoloAviso">Informações Erradas</h3>
			<span class="aviso">Verifique suas informações</span>
		</div>
	</center>
	<?php include 'assosiacao.php';?>
</body>
</html>