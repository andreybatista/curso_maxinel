<?php
$fraseCorreta = 'Ola Mundo';
if ($_POST['frase'] == $fraseCorreta) {
	echo "<center><h1>PARABENS</h1><br />Mais cuidado para n apertar CTRL + S </center>";
}
else{
	echo "Você esta Contaminado";
}
?>