<?php
require_once('../controller/cClientes.php');
$c_aluno = new cClientes();
$sql = $c_aluno->Pesquisar(null);
while ($value = mysqli_fetch_assoc($sql)) {
	$di = $value['id'];
	echo "<tr>";
             echo "<td>".$value['id'] ."</td>";
            echo "<td>".$value['nome'] ."</td>";
            echo "<td>".$value['sobrenome'] ."</td>";
            echo "<td>".$value['login'] ."</td>";
            echo "<td>".$value['senha'] ."</td>";
            echo "<td><a class='btn' href='editar.php?id=".$value['id']."'><i class='perigo fas fa-pencil-alt'></i></a></td><td><a class='btn' href='excluir.php?id=".$value['id']."'><i class='cuidado fas fa-trash'></i></a></td>";
            echo "</tr>";
}
	if (!isset($di)) {
		echo "<tr>";
		echo '<td colspan="5" style="text-aling:center;">Nenhum usuário cadastrado</td>';
		echo "</tr>";
	}
?>