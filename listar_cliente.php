<?php
    session_start();
    include "cabecalho.php";
    include "components/toolbar.php";
    require "db/funcoes.php";

    $clientes = listar_cliente();
?>

<main class="p-4">
    <div class="card">
    <table class="table m-0">
            <thead class="thead-dark">
                <tr>
                    <th></th>
                    <th class="text-center">#</th>
                    <th>Nome</th>
                    <th>cpf</th>
                    <th>Número do Plano</th>
                    <th>Cidade/UF</th>
                    <th>Endereço</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($clientes as $cliente) { ?>
                    <tr>
                        <th scope="row">
                            <img class="thumbnail" src="image/fotos/cliente/<?php echo $cliente['id']; ?>.jpg" height="30" width="30" id="foto">
                        </th>
                        <th scope="row">
                            <span class="pl-2"><?php echo $cliente['id']; ?></span>
                        </th>
                        <th scope="row">1</th>
                        <td><?php echo $cliente['nome']; ?></td>
                        <td><?php echo $cliente['cpf']; ?></td>
                        <td><?php echo $cliente['num_plano']; ?></td>
                        <td><?php echo $cliente['cidade'] . '/' . $cliente['uf']; ?></td>
                        <td><?php echo $cliente['endereco']; ?></td>
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