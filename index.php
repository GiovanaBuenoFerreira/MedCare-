<?php
    include "cabecalho.php";
    session_start();
    if (isset($_SESSION['usuario_logado'])) {
        header('Location: menu.php');
    }
?>

<div class="d-grid h-100 w-100">
    <div class="col-5 card m-auto p-4">
        <form action="db/db.php" method="post">
            <?php 
                if (isset($_SESSION['login_error'])) { 
            ?>
            <small class="message-error">Email e/ou senha incorretos!</small>
            <?php 
                }
                unset($_SESSION['login_error']);
            ?>
            <div class="form-group">
                <label for="email">Endereço de email</label>
                <input id="email" name="email" class="form-control" aria-describedby="email" placeholder="Seu email" type="email" required>
            </div>
            <div class="form-group">
                <label for="senha">Senha</label>
                <input id="senha" name="senha" class="form-control" placeholder="Senha" type="password" required>
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="lembrarme">
                <label name="lembrarme" class="form-check-label" for="lembrarme">Lembrar-Me</label>
            </div>
            <button name="realizar_login" type="submit" class="btn btn-primary w-100">Acessar</button>
            <div class="row d-grid text-center">
                <a href="cadastro_usuario">
                    <h5 class="m-2">Cadastrar-se</h5>
                </a>
            </div>
        </form>
    </div>
</div>


<?php
    include "rodape.php";
?>