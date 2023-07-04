<?php
require_once('../controller/cClientes.php');
$c_aluno = new cClientes();
if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$c_aluno->Excluir($id);
    echo "<script>alert('Registro excluido com sucesso!');document.location='inicio.php'</script>";
}
?>