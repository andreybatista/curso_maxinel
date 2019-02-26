<?php
//Declaro o usuario e senha senha registrado
$usuario = array('id' => 'adm', 'password' => 'adm');
//Se o array recebido como [Post] for igual a variavel do usuario ja registrado{continue}     --    e se o array recebido como [Post] for igual a variavel da senha ja registrada {continue}
if ($_POST['aluno'] == $usuario['id'] && $_POST['senha'] == $usuario['password']) {
	header('Location: http://localhost/maxnivel/curso/logado.php');
}
//Caso contrario envie o usuario para esta pagina
else{
	header('Location: http://localhost/maxnivel/curso/erro.php');
}
?>