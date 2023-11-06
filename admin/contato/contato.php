<?php

require_once('class/contato.php');

$contato = new   contatoClass();
$lista = $contato->ListarContato();

//teste
//var_dump($lista)
?>



<div class="table-responsivo">
    <table class="table table-bordered border-primary">
        <caption>Lista de e-mail</caption>
        <thead>
            <tr>
                <th>Id </th>
                <th>Nome </th>
                <th>E-mail </th>
                <th>Telefone </th>
                <th>Mensagem</th>
                <th>data</th>
                <th>horario</th>
                <th>ativo</th>

            </tr>

        </thead>
        <tbody>
            <?php foreach ($lista as  $linha) : ?>
                <tr>
                    <td><?php echo $linha['idContato']; ?></td>
                    <td><?php echo $linha['nomeContato']; ?></td>
                    <td><?php echo $linha['emailContato']; ?></td>
                    <td><?php echo $linha['telefoneContato']; ?></td>
                    <td><?php echo $linha['mensagemContato']; ?></td>
                    <td><?php echo $linha['dataContato']; ?></td>
                    <td><?php echo $linha['horaContato']; ?></td>
                    <td><?php echo $linha['statusContato']; ?></td>
                </tr>
            <?php endforeach; ?>

        </tbody>

    </table>
</div>