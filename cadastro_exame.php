<?php
    session_start();
    include "cabecalho.php";
    include "components/toolbar.php";
    if(!isset($_SESSION['usuario_logado'])){
        header('location: index.php');
    }
?>


<div class="container my-4">
    <div class="row card p-4"> 
        <form action="listar_exame.php" method="post" enctype="multipart/form-data">
            <h2 class="text-center">Formulário - Cadastro Exame</h2>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-3 d-grid">
                    </div>
                </div>
            </div>
            <div class="container">

                <div class="row">
                    <div class="col-8">
                        <div class="form-group">
                            <label for="descricao">Descrição</label>
                            <input type="text" class="form-control" id="descricao" name="nome" placeholder="Adicione a Descrição do exame..." required>
                        </div>
                    </div>
                </div>

                    <div class="row">
                         <div class="col-md-4">
                        <div class="form-group">
                            <label for="descricao">Confirmação</label>
                            <input type="text" class="form-control" id="descricao" name="nome" placeholder="Escreva sim ou não..." required>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="data">Data</label><br>
                            <input class="w-100" type="date" id="data" name="data" required>
                        </div>
                    </div>
                    

                <div class="container">
                    <div class="row text-right">
                       <div class="col-md-6">
                        <input type="hidden" name="cadastro_exame" value="true">
                        <input type="reset"  id="btnLimpar" name="btnLimpar" class="btn btn-warning" value="Limpar">
                        <input type="submit" id="btnGravar" name="btnGravar" class="btn btn-info"    value="Gravar">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>


<?php
    include "rodape.php";
?>
