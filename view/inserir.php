<?php 
require_once('../controller/cClientes.php');
$c_aluno = new cClientes();
if (isset($_POST['nome'])){
	$nome = $_POST['nome'];
	$sob_nome = $_POST['sob_nome'];
	$user = $_POST['user'];
	$senha = $_POST['senha'];

	$c_aluno->Inserir($nome,$sob_nome,$user,$senha);

	echo "<script>alert('Registrado com sucesso!');document.location='inicio.php'</script>";
}
?>