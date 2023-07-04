<!DOCTYPE HTML>
<html>
<?php include("head.php");
require_once('../controller/cClientes.php');
$c_aluno = new cClientes();
$id = $_GET['id'];
$sql = $c_aluno->Pesquisar_atu($id);
while ($value = mysqli_fetch_assoc($sql)) {
    $di = $value['id'];
    $nome = $value['nome'];
    $sob_nome = $value['sobrenome'];
    $user = $value['login'];
    $senha = $value['senha'];
}
 ?>

<body>
    <?php include("menu.php") ?>
    <?php require_once("../controller/cClientes.php");?>
    <div class="row">
        <form method="post" action="atualizar.php" id="form" name="form"  class="col-10">
            <div class="dir">
                <span>Nome</span>
                <input class="" type="text" id="nome" name="nome" value="<?php echo $nome; ?>" required autofocus>
                <span>Sobrenome</span>
                <input class="" type="text" id="autor" name="sob_nome" value="<?php echo $sob_nome; ?>" required>
                <span>Usuário</span>
                <input class="" type="text" id="quantidade" name="user" value="<?php echo $user; ?>" required>
                <span>Senha</span>
                <input class="" type="text" id="preco" name="senha" value="<?php echo $senha; ?>" required>
            </div>
                <input type="hidden" name="id" value="<?php echo $di;?>">
                <button type="submit" class="btn editar" id="editar" name="submit" value="editar">Editar</button>
        </form>
    </div>
</body>

</html>
