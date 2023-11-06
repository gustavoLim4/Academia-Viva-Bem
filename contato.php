<?php

//Importe classes PHPMailer para o namespace global
//Eles devem estar no topo do seu script, não dentro de uma função
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$ok = 0;

if (isset($_POST['email'])) {

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $fone = $_POST['fone'];
    $mens = $_POST['mens'];
    $assunto  = 'Site Viva Bem';

    require_once ('admin/class/contato.php');

    $contato = new contatoClass ();

    $contato->nomeContato = $nome;
    
    $contato->emailContato = $email;

    $contato->telefoneContato = $fone;

    $contato->mensagemContato = $mens;



    $contato->Inserir();


    require_once('mailer/Exception.php');
    require_once('mailer/PHPMailer.php');
    require_once('mailer/SMTP.php');


    //Crie uma instância; passar `true (verdadeiro)`
    $mail = new PHPMailer(true);


    try {
        //Configurações do servidor
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Habilita saída de depuração detalhada
        $mail->isSMTP();                                            //Enviar usando SMTP
        $mail->Host       = 'smtp.hostinger.com';                   //Defina o servidor SMTP para enviar
        $mail->SMTPAuth   = true;                                   //Habilitar autenticação SMTP
        $mail->Username   = 'vivabem@ti21.smpsistema.com.br';       //SMTP nome de usuário
        $mail->Password   = 'Senac@ti21';                           //SMTP senha
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Habilitar criptografia TLS implícita
        $mail->Port       = 465;                                    //Porta TCP para conexão

        //Destinatários
        $mail->setFrom('vivabem@ti21.smpsistema.com.br', $assunto);            // Quem dispara o email
        $mail->addAddress('gl6772344@gmail.com');                 //Adicionar um destinatário


        //Conteúdo do email
        $mail->isHTML(true);                                          //Defina o formato do e-mail para HTML
        $mail->Subject = $assunto;

        //Conteúdo HTML
        $mail->Body    = "        
            <strong>Nome: </strong> $nome <br>
            <strong>Email:</strong> $email <br>
            <strong>Telefone:</strong> $fone <br>
            <strong>Mensagem:</strong> $mens
        ";
        //Sem formatação HTML
        $mail->AltBody = "
            <strong>Nome: </strong> $nome <br>
            <strong>Email:</strong> $email <br>
            <strong>Telefone:</strong> $fone <br>
            <strong>Mensagem:</strong> $mens
        ";

        $mail->send();
        // echo 'Email enviado com Sucesso!';
        $ok = 1;
    } catch (Exception $e) {
        // echo "Error: {$mail->ErrorInfo}";
        $ok = 2;
    }
}

?>


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

        <!--MAPA-->
        <section class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58548.401676145644!2d-46.460603388932554!3d-23.48659854587954!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce63dda7be6fb9%3A0xa74e7d5a53104311!2sSenac%20S%C3%A3o%20Miguel%20Paulista!5e0!3m2!1spt-BR!2sbr!4v1695814057277!5m2!1spt-BR!2sbr" width="100%" height="700" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>
        <section class="contato">
            <div class="site">
                <h2>Contato</h2>
                <h4>
                    <?php
                    if ($ok == 1) {
                        echo $nome . ", sua mensagem foi enviada com sucesso !";
                    } else if ($ok == 2) {
                        echo $nome . "Não foi possível enviar sua mensagem. tente mais tarde !";
                    }


                    ?>
                </h4>


               <div> <form action="#" method="POST">

                    <div class="formulario">

                        <div class="formu">

                            <div class="formulario23">
                                <label for="nome"> Nome: </label>
                                <input type="text" name="nome" id="nome" placeholder="Imforme seu nome:" required>
                            </div>


                            <div class="formulario23">
                                <label for="email"> E-mal: </label>
                                <input type="email" name="email" id="email" placeholder="Informe seu e-mail :" required>
                            </div>


                            <div class="formulario23">
                                <label for="fone"> Telefone: </label>
                                <input type="tel" name="fone" id="fone" placeholder="Imforme seu nome:">
                            </div>
                        </div>

                        <div class="MSG1">
                            <div class="msgr">
                                <div class="mensagem">
                                    <label for="mens">Mensagem:</label>
                                    <textarea name="mens" id="mens" cols="20" rows="10"></textarea>
                                </div>
                            </div>

                            <div class="butom">

                                <input type="submit" value="Enviar por e-mail">
                                <input type="button" value="Enviar por WhatsApp" onclick="Enviarwhats()">

                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </section>
        


        <!--INICIO SERVIÇO-->
        <?php require_once('conteudo/treino.php'); ?>

        <!--INICIO GALERIA-->
        <?php require_once('conteudo/galeria.php'); ?>

        <!--INICIO DA EQUIPE-->
        <?php require_once('conteudo/equipe.php'); ?>

    </main><!--FIM DO CORPO-->

    <!--  RODAPÈ -->

    <?php require_once('conteudo/rodape.php'); ?>
    <!-- BIBLIOTECA JQUERY -->
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

    <script src="js/slick.min.js"></script>
    <script src="js/lity.min.js"></script>
    <script src="js/wow.min.js"></script>


    <script src="js/script.js"></script>

</body>



</html>