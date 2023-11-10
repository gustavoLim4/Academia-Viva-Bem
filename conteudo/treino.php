<section class="contServico  wow animate__animated animate__fadeInUp">

    <div class="site">
        <h2>Treinos</h2>
        <div>
            <?php 
            
            $listaRand = array_rand($lista ,min( 3, count($lista)));
            
            foreach ($listaRand as $key) : {$linha = $lista[$key];} 
            
            ?>
                <div>
                    <h3> <?php echo $linha['nomeExercicio'] ?></h3>

                    <img src="<?php echo 'img/' . $linha['fotoExercicio'] ?>" alt="img serviço da cor azul">

                    <p> <?php echo $linha['descricaoExercicio'] ?> </p>

                    <a href="#"> Conheça</a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section><!--FIM SERVIÇO-->