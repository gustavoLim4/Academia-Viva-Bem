<?php

session_start();

if (isset($_SESSION['idAluno'])) {
    echo "CHegguei";
} else {
    header("Location:http://localhost/vivabem/");
    exit();
}
    $pagina = @$_GET['p'];

?>



<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="css/styleClass.css">

    <title>Instrutores</title>

</head>



<body>



    <header>

        <img src="img/logoVivaBem.svg" alt="">

        <?php

        if ($pagina == '') {

            echo '<h1>Dashboard</h1>';
        } else {

            echo ('<h1>' . $pagina . '</h1>');
        }

        ?>

        <div>
            <img src="img/btnLogin.png" alt="">
            <h2>Nome</h2>
        </div>

    </header>

    <main>
        <aside>

            <a href="index.php?p=Dashboard" class="<?php echo ((@$_GET['p'] == 'dashboard') || (@$_GET['p'] == '')) ? 'menuAtivo' : ''; ?>">DASHBOARD</a>

            <a href="index.php?p=banner" class="<?php echo (@$_GET['p'] == 'banner') ? 'menuAtivo' : ''; ?>">BANNER</a>

            <a href="index.php?p=matriculas" class="<?php echo (@$_GET['p'] == 'matriculas') ? 'menuAtivo' : ''; ?>">MATRÍCULAS</a>

            <a href="index.php?p=exercicios" class="<?php echo (@$_GET['p'] == 'exercicios') ? 'menuAtivo' : ''; ?>">EXERCÍCIOS</a>

            <a href="index.php?p=aulas" class="<?php echo (@$_GET['p'] == 'aulas') ? 'menuAtivo' : ''; ?>">AULAS</a>

            <a href="index.php?p=treinos" class="<?php echo (@$_GET['p'] == 'treinos') ? 'menuAtivo' : ''; ?>">TREINOS</a>

            <a href="index.php?p=instrutores" class="<?php echo (@$_GET['p'] == 'instrutores') ? 'menuAtivo' : ''; ?>">INSTRUTORES</a>

            <a href="index.php?p=alunos" class="<?php echo (@$_GET['p'] == 'alunos') ? 'menuAtivo' : ''; ?>">ALUNOS</a>

            <a href="index.php?p=pagamentos" class="<?php echo (@$_GET['p'] == 'pagamentos') ? 'menuAtivo' : ''; ?>">PAGAMENTOS</a>

            <a href="index.php?p=relatorio" class="<?php echo (@$_GET['p'] == 'relatorio') ? 'menuAtivo' : ''; ?>">RELATÓRIO</a>

            <a href="index.php?p=contato" class="<?php echo (@$_GET['p'] == 'contato') ? 'menuAtivo' : ''; ?>">E-MAIL</a>

            <a href="index.php?p=ajuda" class="<?php echo (@$_GET['p'] == 'ajuda') ? 'menuAtivo' : ''; ?>">AJUDA E SUPORTE</a>

        </aside>

        <div class="box">

            <!-- CONTEÚDO DAS PÁGINAS -->

            <?php

            switch ($pagina) {

                case 'dashboard':

                    echo 'PG Dashboard';

                    break;

                case 'banner':

                    echo 'PG banner';

                    break;


                case 'matriculas':

                    echo 'PG Matriculas';

                    break;

                case 'exercicios':

                    require_once('exercicios/exercicios.php');

                    break;

                case 'aulas':

                    echo 'PG Aulas';

                    break;

                case 'treinos':

                    echo 'PG Treinos';

                    break;

                case 'instrutores':

                    echo '';
                    require_once('instrutores/instrutores.php');

                    break;

                case 'alunos':

                    echo '';

                    require_once('alunos/alunos.php');

                    break;

                case 'pagamentos':

                    echo 'PG Pagamentos';

                    break;

                case 'relatorio':

                    echo 'PG Relatório';

                    break;

                case 'contato':

                    echo '';
                    require_once('contato/contato.php');

                    break;

                case 'ajuda':

                    echo 'PG Ajuda';

                    break;



                default:

                    echo 'PG Dashboard';

                    break;
            }

            ?>

        </div>
    </main>


    <footer>
        <div class="direitos">
            <h2>Direitos reservados ao TI21 - Senac SMP</h2>
        </div>

        <div class="desenvolvido">
            <h2>Desenvolvido por Alessandro e Ricardo</h2>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="js/scriptSS.js"></script>
</body>



</html>