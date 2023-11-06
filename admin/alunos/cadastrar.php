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
                            <input type="file" class="form-control" id="fotoExercicio" name="fotoExercicio"
                                style="display:none;">
                        </div>

                    </div>

                    <div class="col-md-8 form-dash">

                        <div class="form-group10">
                            <label for="nomeExercicio" class="col-sm-2 col-form-label">Nome:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nomeExercicio" name="nomeExercicio"
                                    required="" placeholder="*Informe seu nome:">
                            </div>
                        </div>

                        <div class="form-group10 ">
                            <label for="nomeExercicio" class="col-sm-2 col-form-label">E-mail:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nomeExercicio" name="nomeExercicio"
                                    required="" placeholder="*Informe seu E-mail:">
                            </div>
                        </div>

                        <div class="form-group10 ">
                            <label for="nomeExercicio" class="col-sm-2 col-form-label">Senha:</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="nomeExercicio" name="nomeExercicio"
                                    required="" placeholder="*Informe sua senha:">
                            </div>
                        </div>

                        <div class="data" >
                            <input id="dataNascAluno" type="date" />
                        </div>


                        <div class="form-group col-sm-4">

                            <select class="form-select col-sm-2" name="statusExercicio" required>
                                <option selected="">Status do Aluno</option>
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
                    <button type="submit" class="btn btn-primary">Cadastrar Exercício</button>
                </div>

            </div>
    </div>

</div>
</form>
</div>

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