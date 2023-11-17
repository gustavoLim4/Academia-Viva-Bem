<?php

$id = $_GET["id"];

require_once("class/exercicios.php");

$exercicio = new ExerciciosClass($id);



if (isset($_POST['nomeExercicio'])) {



}
?>

<div class="col-md-12">

    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title"> Atualizar de Exercícios</h3>
        </div>

        <form action="index.php?p=exercicios&e=atualizar" method="POST" enctype="multipart/form-data">

            <div class="card-body">

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group row">
                            <img src="../img/<?php echo $exercicio->fotoExercicio ?>" alt="Imagem Sem Foto" id="imgFoto">
                            <input type="file" class="form-control" id="fotoExercicio" name="fotoExercicio"
                                style="display:none;" value="<?php echo $exercicio->fotoExercicio ?>">
                        </div>

                    </div>

                    <div class="col-md-8 form-dash">

                        <div class="form-group row">
                            <label for="nomeExercicio" class="col-sm-2 col-form-label">Nome:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nomeExercicio" name="nomeExercicio"
                                    placeholder="Informe seu nome:" value="<?php echo $exercicio->nomeExercicio ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="descricaoExercicio" class="col-sm-2 col-form-label">Descrição:</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="descricaoExercicio" id="descricaoExercicio"
                                    cols="30" rows="10" required=""
                                    placeholder="Informe a descrição do exercício:"><?php echo $exercicio->descricaoExercicio ?></textarea>
                            </div>
                        </div>

                        <div class="row">

                            <div class="form-group col-sm-6 offset-md-2">
                                <select class="form-select col-sm-2" name="categoriasExercicio" required>
                                    <option value="<?php echo $exercicio->categoriasExercicio?>"><?php echo $exercicio->categoriasExercicio?></option>
                                    <option value="Peito">Peito</option>    
                                    <option value="Pernas">Pernas</option>
                                    <option value="Braços">Braços</option>
                                    <option value="Abdômen">Abdômen</option>
                                    <option value="Cardio">Cardio</option>
                                </select>

                            </div>

                            <div class="form-group col-sm-4">

                                <select class="form-select col-sm-2" name="statusExercicio" required>
                                <option value="<?php echo $exercicio->statusExercicio?>"><?php echo $exercicio->statusExercicio?></option>
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
                            <input type="text" class="form-control" id="linkExercicio" name="linkExercicio" required=""
                                placeholder="Informe o Link Exercício:">
                        </div>
                    </div>

                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button type="submit" class="btn btn-primary">Atualizar Exercício</button>
                    </div>

                </div>
            </div>

    </div>
    </form>
</div>



<script>
    document.getElementById('imgFoto').addEventListener('click', function () {
        document.getElementById('fotoExercicio').click();
    });

    document.getElementById('fotoExercicio').addEventListener('change', function (e) {

        let imgFoto = document.getElementById('imgFoto');
        let arquivo = e.target.files[0];

        if (arquivo) {
            let carregar = new FileReader();

            carregar.onload = function (e) {
                imgFoto.src = e.target.result;
                console.log(imgFoto.src);
            }

            carregar.readAsDataURL(arquivo);
        }

    });
</script>