<!DOCTYPE HTML>
<html>
<?php include("head.php") ?>

<body>
    <?php include("menu.php") ?>
    <div class="row">
        <form method="post" action="inserir.php" id="form" name="form"  class="col-10">
            <div class="dir">
                <h2>Cadestre um novo usuário</h2>
                <input class="" type="text" id="nome" name="nome" placeholder="Nome" required autofocus>
                <input class="" type="text" id="sobrenome" name="sob_nome" placeholder="Sobrenome" required>
                <input class="" type="text" id="login" name="user" placeholder="Usuário" required>
                <input class="" type="password" id="senha" name="senha" placeholder="Senha" required>
            </div>
            <div class="">
                <button type="submit" class="btn but" id="cadastrar">Cadastrar</button>
            </div>
        </form>
    </div>
</body>

</html>
