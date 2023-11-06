<?php
if (isset($_POST['nomeExercicio'])) {

    $nomeExercicio =         $_POST['nomeExercicio'];

    $descricaoExercicio =    $_POST['descricaoExercicio'];

    $categoriasExercicio =   $_POST['categoriasExercicio'];

    $statusExercicio =       $_POST['statusExercicio'];

    $linkExercicio =         $_POST['linkExercicio'];

    $arquivo =               $_FILES ['fotoExercicio'];

    if($arquivo['erro']){
        throw new Exception('Error' .$arquivo['error']); 
    }

    // FUNÇÃO DO FILES DE TRATAMENTO DO ARQUIVO 👇

    if (move_uploaded_file($arquivo['tmp_name'],'../img/exercicio/'.$arquivo['name'])){

        $fotoExercicio = 'exercicio/' . $arquivo['name']; // exercicio/agachamento.png

    }else{

        throw new Exception('Erro : Não foi possivel realizar o ulpload a imagem. '); 

    }


    require_once('class/exercicios.php');

    $exercicio = new ExerciciosClass();

    $exercicio->nomeExercicio = $nomeExercicio;

    $exercicio->descricaoExercicio = $descricaoExercicio;

    $exercicio->categoriasExercicio = $categoriasExercicio;

    $exercicio->statusExercicio = $statusExercicio;

    $exercicio->fotoExercicio = $fotoExercicio;

    $exercicio->linkExercicio = $linkExercicio;
    

    $exercicio->Cadastrar();
  

}
?>

<div class="col-md-12">

    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title"> Cadastro de Exercícios</h3>
        </div>

        <form action="index.php?p=exercicios&e=cadastrar" method="POST" enctype="multipart/form-data">
            <div class="card-body">

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group row">
                            <img src="../img/sem-foto.png" alt="Imagem Sem Foto" id="imgFoto">
                            <input type="file" class="form-control" id="fotoExercicio" name="fotoExercicio" style="display:none;">
                        </div>

                    </div>

                    <div class="col-md-8 form-dash">

                        <div class="form-group row">
                            <label for="nomeExercicio" class="col-sm-2 col-form-label">Nome:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nomeExercicio" name="nomeExercicio" required="" placeholder="Informe seu nome:">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="descricaoExercicio" class="col-sm-2 col-form-label">Descrição:</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="descricaoExercicio" id="descricaoExercicio" cols="30" rows="10" required="" placeholder="Informe a descrição do exercício:"></textarea>
                            </div>
                        </div>

                        <div class="row">

                            <div class="form-group col-sm-6 offset-md-2">
                                <select class="form-select col-sm-2" name="categoriasExercicio" required>
                                    <option selected="">Seleciona a opção de exercício</option>
                                    <option value="Peito">Peito</option>
                                    <option value="Pernas">Pernas</option>
                                    <option value="Braços">Braços</option>
                                    <option value="Abdômen">Abdômen</option>
                                    <option value="Cardio">Cardio</option>
                                </select>

                            </div>

                            <div class="form-group col-sm-4">

                                <select class="form-select col-sm-2" name="statusExercicio" required>
                                    <option selected="">Seleciona o status do exercicio</option>
                                    <option value="ATIVO">ATIVO</option>
                                    <option value="DESATIVA">DESATIVADO</option>
                                    <option value="INATIVO">INVALIDO</option>

                                </select>
                            </div>

                        </div>

                    </div>

                    <div class="form-group23 row">
                        <label for="linkExercicio" class="col-sm-2 col-form-label">Exercício:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="linkExercicio" name="linkExercicio" required="" placeholder="Informe o Link Exercício:">
                        </div>
                    </div>

                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button type="submit" class="btn btn-primary">Cadastrar Exercício</button>
                    </div>

                </div>
            </div>

    </div>
    </form>
</div>

</div>


<script>
    document.getElementById('imgFoto').addEventListener('click', function() {
        document.getElementById('fotoExercicio').click();
    });

    document.getElementById('fotoExercicio').addEventListener('change', function(e) {

        let imgFoto = document.getElementById('imgFoto');
        let arquivo = e.target.files[0];

        if (arquivo) {
            let carregar = new FileReader();

            carregar.onload = function(e) {
                imgFoto.src = e.target.result;
                console.log(imgFoto.src);
            }

            carregar.readAsDataURL(arquivo);
        }

    });
</script>