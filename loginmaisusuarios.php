<?php 

$usuario[] = array('id' => 'andrey', 'password' => '1234');
$usuario[] = array('id' => 'wilas', 'password' => '132');
$usuario[] = array('id' => 'marcus', 'password' => '321');
$usuario[] = array('id' => 'joão', 'password' => '123');


$valor = 'Informações incorretas';


$login = 0;

for ($i = 0; $i <= count($usuario); $i++) {
	$usuario[$i]['id'];
	$usuario[$i]['password'];

	if ($_POST['aluno'] == $usuario[$i]['id'] && $_POST['senha'] == $usuario[$i]['password']) {
		$login = $usuario[$i]['id'];
		$login = $usuario[$i]['password'];
	}
}
var_dump($login);
exit();

if ($login != 0) {
	header('Location: http://localhost/maxnivel/curso/logado.php');
}else {
	header('Location: http://localhost/maxnivel/curso/erro.php');
}
?>