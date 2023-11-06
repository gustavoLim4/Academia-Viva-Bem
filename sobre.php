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

        <!--INICIO DO 1º SOBRE-->
        <section class="contSobre animate__animated animate__fadeInUp ">

            <div class="site">
                <h2 class="animate__animated animate__bounce animate__delay-2s">Sobre</h2>
                <div>
                    <div>
                        <img src="img/sobreFT.png" alt="img sobre na cor azul">
                    </div>

                    <div>
                        <p>
                            A Academia Viva Bem é mais do que um simples centro de condicionamento físico; somos uma
                            comunidade comprometida com a promoção da saúde e do bem-estar em todos os aspectos da vida.
                            Fundada em 2023, nossa academia tem se empenhado em oferecer um ambiente acolhedor e
                            motivador, onde pessoas de todas as idades e níveis de condicionamento físico podem alcançar
                            seus objetivos pessoais de forma sustentável e gratificante.
                            Se você está pronto para começar sua jornada em direção a uma vida mais saudável e plena, a
                            Academia Viva Bem está aqui para apoiá-lo a cada passo do caminho. Junte-se a nossa
                            comunidade e descubra como é viver com vitalidade, energia e alegria.
                            Viva bem, viva com vitalidade na Academia Viva Bem!
                        </P>
                    </div>
                </div>
            </div>
        </section><!--FIM DO 1º SOBRE-->

        <section>
            <div class="site">
                <div class="pegatudo contSobre animate__animated animate__fadeInUp">
                    <div class="quadro1">
                        <p>
                            A missão da Academia VivaBem é ser o catalisador da transformação positiva na vida das pessoas, ao proporcionar um ambiente inspirador e acolhedor para a busca da saúde e do bem-estar integral. Através de programas de treinamento personalizados, orientação nutricional e práticas de bem-estar, nosso objetivo é capacitar cada indivíduo a alcançar um estado de vitalidade física, mental e emocional. Buscamos não apenas promover a mudança física, mas também ser um guia no caminho para uma vida mais saudável, ativa e significativa.
                            Nossa missão se baseia em valores de integridade, empatia e excelência, assegurando que cada membro se sinta valorizado e apoiado em sua jornada. Ao criar uma comunidade comprometida com a busca do bem-estar, aspiramos a ser a referência quando se trata de promover o equilíbrio entre corpo, mente e espírito. A Academia VivaBem se empenha em desencadear um impacto positivo e duradouro nas vidas que tocamos, capacitando-as a viver com vitalidade e propósito.
                        </p>
                    </div>
                    <div class="foto">
                        <img src="img/missao.png" alt="img sobre na cor azul">
                    </div>
                </div>
            </div>
        </section>

        <!--INICIO DO 2º SOBRE-->
        <section class="contSobre animate__animated animate__fadeInUp ">

            <div class="site">

                <div class="menor">
                    <div>
                        <img src="img/visao.png" alt="img sobre na cor azul">
                    </div>

                    <div >
                        <p>
                            Como parte de nossa visão, desejamos criar uma comunidade vibrante e interconectada, onde os membros se sintam inspirados a compartilhar suas jornadas, superar desafios e celebrar conquistas.
                             Enxergamos a Academia VivaBem como um farol de mudança cultural, influenciando positivamente as percepções e hábitos em torno da saúde e do bem-estar. Através do nosso compromisso com a excelência, inovação e 
                             empatia, aspiramos a ser reconhecidos como líderes na transformação de vidas, fortalecendo indivíduos e comunidades para viverem suas vidas mais saudáveis, vibrantes e realizadas.
                        </P>
                    </div>
                </div>
            </div>
        </section><!--FIM DO 2º SOBRE-->

        <section>
            <div class="site">
                <div class="pegatudo contSobre animate__animated animate__fadeInUp">
                    <div class="quadro1">
                        <p>
                            1º Integridade: Agimos com transparência e honestidade em todas as interações, mantendo o compromisso com a ética e a confiança.
                            2º Compromisso com o Cliente: Colocamos as necessidades e objetivos de nossos membros em primeiro lugar, buscando proporcionar experiências e resultados excepcionais.
                            3º Excelência: Buscamos aprimoramento constante em nossos serviços, priorizando a qualidade e a inovação em todos os aspectos da academia.
                            4º Comunidade: Fomentamos um ambiente acolhedor e solidário, onde todos são valorizados e respeitados, promovendo conexões significativas.
                            5º Saúde Holística: Reconhecemos a importância da saúde integral, abordando corpo, mente e espírito para um bem-estar verdadeiro.
                            6º Paixão: Demonstramos entusiasmo e dedicação em tudo o que fazemos, inspirando outros a adotarem um estilo de vida saudável com a mesma paixão.
                            7º Responsabilidade Social: Contribuímos positivamente para a sociedade, promovendo a saúde não apenas individualmente, mas também coletivamente.
                        </p>
                    </div>
                    <div class="foto">
                        <img src="imagem/valores.png" alt="img sobre na cor azul">
                    </div>
                </div>
            </div>
        </section>

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