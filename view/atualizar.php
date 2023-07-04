<?php 
require_once('../controller/cClientes.php');
$c_aluno = new cClientes();
if (isset($_POST['nome'])){
	$nome = $_POST['nome'];
	$sob_nome = $_POST['sob_nome'];
	$user = $_POST['user'];
	$senha = $_POST['senha'];
	$id = $_POST['id'];

	$c_aluno->Atualizar($nome,$sob_nome,$user,$senha,$id);
	echo "<script>alert('Registro atualizado com sucesso!');document.location='inicio.php'</script>";
}
?>