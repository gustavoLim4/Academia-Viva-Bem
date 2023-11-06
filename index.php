<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>projetinho TI21</title>
    <link rel="stylesheet" href="css/reset.css">


    <!--    link   "js"    -->


    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slick-theme.css">
    <link rel="stylesheet" href="css/lity.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <!-- regra do   "smp o ultimo"   css -->

    <link rel="stylesheet" href="css/style.css">

    <!--  RESPONSIVO  -->

    <link rel="stylesheet" href="css/responsivo.css">


</head>

<body>

    <!--INICIO DO TOPO 01-->
    <?php require_once('conteudo/topo.php'); ?>


    <main><!--INICIO DO CORPO-->

        
        <!--INICIO DO BENNER-->

        <?php require_once('conteudo/banner.php'); ?>

        <!--INICIO DO SOBRE-->

        <?php require_once('conteudo/sobre.php'); ?>

        <!--INICIO SERVIÇO-->
        <?php require_once('conteudo/treino.php'); ?>

        <!--INICIO GALERIA-->
        <?php require_once('conteudo/galeria.php'); ?>

        <!--INICIO DA EQUIPE-->
        <?php require_once('conteudo/equipe.php') ;?>

        <!--INICIO DESTAQUE-->
        <?php require_once ('conteudo/destaque.php');?>

    </main><!--FIM DO CORPO-->

    <!--  RODAPÈ -->

        <?php require_once ('conteudo/rodape.php'); ?>
    <!-- BIBLIOTECA JQUERY -->
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

    <script src="js/slick.min.js"></script>
    <script src="js/lity.min.js"></script>
    <script src="js/wow.min.js"></script>


    <script src="js/script.js"></script>

</body>



</html>