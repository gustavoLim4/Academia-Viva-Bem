<?php

require_once('class/alunos.php');

$aluno = new alunosClass();

$lista = $aluno->ListarAlunos()

?>

<div>
    <a class="icon-link icon-link-hover" style="--bs-icon-link-transform: translate3d(0, -.125rem, 0);" href="index.php?p=alunos&e=cadastrar">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
        </svg>
        Novo Excercicio
    </a>
</div>

<div class="table-responsivo">
    <div class="aluno">
        <table class="table table-bordered border-primary">
            <caption>Lista de Aluno</caption>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome </th>
                    <th>Data</th>
                    <th>E-mail</th>
                    <th>Senha</th>
                    <th>data</th>
                    <th>Status</th>
                    <th>Foto</th>

                </tr>

            </thead>
            <tbody>
                <?php foreach ($lista as  $linha) : ?>
                    <tr>
                        <td><?php echo $linha['idAluno']; ?></td>
                        <td><?php echo $linha['nomeAluno']; ?></td>
                        <td><?php echo $linha['dataNascAluno']; ?></td>
                        <td><?php echo $linha['emailAluno']; ?></td>
                        <td><?php echo $linha['senhaAluno']; ?></td>
                        <td><?php echo $linha['dataCadAluno']; ?></td>
                        <td><?php echo $linha['statusAluno']; ?></td>
                        <td><img src="../img/<?php echo $linha['fotoAluno'] ?>" alt="<?php echo $linha['fotoAluno']?>"></td>
                    </tr>
                <?php endforeach; ?>

            </tbody>

        </table>
    </div>
</div>