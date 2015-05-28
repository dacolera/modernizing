<?php

include_once "forms.php";
include_once "functions.php";
include_once "mathFunctions.php";
include_once "stringFunctions.php";

//cadastra

$formCadastro = new Formulario();
$formCadastro->add("<input type='text' name='nome' id='nome' />");
$formCadastro->add("<input type='text' name='sobrenome' id='sobrenome' />");
$formCadastro->add("<input type='text' name='idade' id='idade' />");
$formCadastro->add("<input type='text' name='profissao' id='profissao' />");
$formCadastro->add("<input type='text' name='salario' id='salario' />");
$formCadastro->add("<input type='submit' value='Enviar' />");
$formCadastro->render();

//listagem

$lista = fetchAll();

?>

<table>
	<tr>
		<th>Id</th>
		<th>Nome</th>
		<th>Sobrenome</th>
		<th>Idade</th>
		<th>Profissão</th>
		<th>Salário</th>
	</tr>
	<?php  foreach($lista as $linha) {?>
	<tr>
		<td><? echo $linha['id'] ?></td>
		<td><? echo $linha['nome'] ?></td>
		<td><? echo $linha['sobrenome'] ?></td>
		<td><? echo $linha['idade'] ?></td>
		<td><? echo $linha['profissao'] ?></td>
		<td><? echo $linha['salario'] ?></td>
	</tr>	
	<?php  } ?>
</table>
