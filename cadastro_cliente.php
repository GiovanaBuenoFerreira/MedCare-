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
        <form action="db/db.php" method="post" enctype="multipart/form-data">
            <h2 class="text-center">Formulário - Cadastro Paciente</h2>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-2">
                        <img class="thumbnail" src="image/paciente_padrao.png" height="150" width="150" id="foto">
                    </div>
                    <div class="col-md-3 d-grid">
                        <div class="my-auto">
                            <label for="nome">Selecionar Foto</label>
                            <input type="file" name="foto" id="foto" value="foto">
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">

            <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="cpf">CPF</label><br>
                            <input class="form-control" type="text" id="cpf" name="cpf" placeholder="Informe o seu CPF" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input type="text" class="form-control" id="nome" name="nome" placeholder="Infome o Nome" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col ">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Informe o seu email" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="senha">Senha de Acesso</label>
                            <input type="password" class="form-control" id="senha" name="senha" placeholder="Informe a Senha de Acesso" required>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="endereco">Endereço</label><br>
                            <input class="form-control" type="text" id="endereco" name="endereco" placeholder="Informe o endereco" required>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="num_plano">Número do Plano</label><br>
                            <input class="form-control" type="text" id="num_plano" name="num_plano" placeholder="Informe o seu número do plano" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <div class="form-group">
                            <label for="cidade">Cidade</label><br>
                            <input class="form-control" type="text" id="cidade" name="cidade" placeholder="Informe uma Cidade" required>
                        </div>
                    </div>

        
                    <div class="col-md-1'">
                        <div class="form-group">
                            <label for="uf">Estado</label><br>
                            <select id="uf" name="uf" required>
                                <option value="UF" disabled>Selecionar Estado...</option>
                                <option value="AC">AC</option>
                                <option value="AL">AL</option>
                                <option value="AM">AM</option>
                                <option value="AP">AP</option>
                                <option value="BA">BA</option>
                                <option value="CE">CE</option>
                                <option value="DF">DF</option>
                                <option value="ES">ES</option>
                                <option value="GO">GO</option>
                                <option value="MA">MG</option>
                                <option value="MG">MG</option>
                                <option value="MS">MS</option>
                                <option value="MT">MT</option>
                                <option value="PA">PA</option>
                                <option value="PB">PB</option>
                                <option value="PE">PE</option>
                                <option value="PI">PI</option>
                                <option value="PR">PR</option>
                                <option value="RJ">RJ</option>
                                <option value="RN">RN</option>
                                <option value="RO">RO</option>
                                <option value="RR">RR</option>
                                <option value="RS">RS</option>
                                <option value="SC">SC</option>
                                <option value="SE">SE</option>
                                <option value="SP">SP</option>
                                <option value="TO">TO</option>
                            </select>
                        </div>
                    </div>
                </div>
               
                    <div class="row">
                    <div class="col text-right">
                        <input type="hidden" name="cadastrar_medico" value="true">
                        <input type="reset"  id="btnLimpar" name="btnLimpar" class="btn btn-warning" value="Limpar">
                        <input type="submit" id="btnGravar" name="btnGravar" class="btn btn-info"    value="Gravar">
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<?php
    include "rodape.php";
?>
