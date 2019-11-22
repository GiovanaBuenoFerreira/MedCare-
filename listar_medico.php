<?php
    session_start();
    include "cabecalho.php";
    include "components/toolbar.php";
    require "db/funcoes.php";

    $medicos = listar_medico();
?>

<main class="p-4">
    <div class="card">
        <table class="table m-0">
            <thead class="thead-dark">
                <tr>
                    <th></th>
                    <th class="text-center">#</th>
                    <th>Nome</th>
                    <th>CRM</th>
                    <th>Cidade/UF</th>
                    <th>Especialidade</th>
                    <th>Área de Atuação</th>
                    <th colspan="2">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($medicos as $medico) { ?>
                    <tr>
                        <th scope="row">
                            <img class="thumbnail" src="image/fotos/medico/<?php echo $medico['id']; ?>.jpg" height="30" width="30" id="foto">
                        </th>
                        <th scope="row">
                            <span class="pl-2"><?php echo $medico['id']; ?></span>
                        </th>
                        <td><?php echo $medico['nome']; ?></td>
                        <td><?php echo $medico['crm']; ?></td>
                        <td><?php echo $medico['cidade'] . '/' . $medico['uf']; ?></td>
                        <td><?php echo $medico['especialidade']; ?></td>
                        <td><?php echo $medico['area_atuacao']; ?></td>
                        <td><i class="im im-pencil"></i></td>
                        <td><i class="im im-trash-can"></i></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</main>



<?php
    include "rodape.php";
?>