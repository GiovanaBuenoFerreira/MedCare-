<?php
    session_start();
    include "cabecalho.php";
    include "components/toolbar.php";
    require "db/funcoes.php";

    $exames = listar_exame();
?>

<main class="p-4">
    <div class="card">
        <table class="table m-0">
            <thead class="thead-dark">
                <tr>
                    <th class="text-center">#</th>
                    <th>Descricao</th>
                    <th>Data</th>
                    <th>Confirmado</th>
                    <th colspan="2">Ações</th>
                </tr>
            </thead>
            <tbody>
            
                <?php foreach ($exames as $exame) { ?>
                    <tr>
                        <th scope="row">
                            <span class="pl-2"><?php echo $exame['id']; ?></span>
                        </th>
                        <td><?php echo $exame['descricao']; ?></td>
                        <td><?php echo $exame['data']; ?></td>
                        <td><?php echo $exame['confirmado'] ?></td>
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