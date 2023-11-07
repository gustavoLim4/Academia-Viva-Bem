<?php


    //PARA ENVIAR PARA O BANCO DE DADOS 👇🏽

if (isset($_POST['nomeAluno'])) {

    $nomeAluno = $_POST['nomeAluno'];

    $dataNascAluno = $_POST['dataNascAluno'];

    $emailAluno = $_POST['emailAluno'];

    $senhaAluno = $_POST['senhaAluno'];

    $statusAluno = $_POST['statusAluno'];

    $arquivo = $_FILES['fotoAluno'];

    if ($arquivo['erro']) {
        throw new Exception('Error' . $arquivo['error']);
    }

    // FUNÇÃO DO FILES DE TRATAMENTO DO ARQUIVO 👇

    

    if (move_uploaded_file($arquivo['tmp_name'], '../img/aluno/' . $arquivo['name'])) {  //  👈🏽  PARA QUE VA DIRETO PARA A PASTA DE ARQUIVOS "aluno" 

        $fotoAluno = 'aluno/' . $arquivo['name']; // exercicio/agachamento.png

    } else {

        throw new Exception('Erro : Não foi possivel realizar o ulpload a imagem. '); // 👈🏽   CANSO DER ERRO ESSA MENSAGEM SERA MOSTRA NA TELA

    }
    
   // PARA APARECER NO SITE O NOVO CADASTRO 👇🏽

    require_once('class/alunos.php');

    $aluno = new alunosClass();

    $aluno->nomeAluno = $nomeAluno;

    $aluno->dataNascAluno = $dataNascAluno;

    $aluno->emailAluno = $emailAluno;

    $aluno->senhaAluno = $senhaAluno;

    $aluno->statusAluno = $statusAluno;

    $aluno->fotoAluno = $fotoAluno;


    $aluno->Cadastrar();
}



?>

<!-- CAIXA DE PREENCHIMENTO DO FORMULARIO  -->

<div class="col-md-12">


    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title"> Cadastro de Exercícios</h3>
        </div>

        <form action="index.php?p=alunos&e=cadastrar" method="POST" enctype="multipart/form-data">

            <div class="card-body">

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group row">
                            <img src="../img/sem-foto.png" alt="Imagem Sem Foto" id="imgFoto">
                            <input type="file" class="form-control" id="fotoAluno" name="fotoAluno"
                                style="display:none;">
                        </div>

                    </div>

                    <div class="col-md-8 form-dash">

                        <div class="form-group10">
                            <label for="nomeAluno" class="col-sm-2 col-form-label">Nome:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nomeAluno" name="nomeAluno  "
                                    required="" placeholder="*Informe seu nome:">
                            </div>
                        </div>

                        <div class="form-group10 ">
                            <label for="emailAluno" class="col-sm-2 col-form-label">E-mail:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="emailAluno" name="emailAluno"
                                    required="" placeholder="*Informe seu E-mail:">
                            </div>
                        </div>

                        <div class="form-group10 ">
                            <label for="senhaAluno" class="col-sm-2 col-form-label">Senha:</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="senhaAluno" name="senhaAluno"
                                    required="" placeholder="*digite sua senha:">
                            </div>
                        </div>
                        <div class="dois22" >
                            <div class="form-group col-sm-4">

                                <select class="form-select col-sm-2" name="statusAluno" required>
                                    <option selected="">Status do Aluno</option>
                                    <option value="ATIVO">ATIVO</option>
                                    <option value="DESATIVA">DESATIVADO</option>
                                    <option value="INATIVO">INVALIDO</option>

                                </select>
                            </div>

                            <div class="data">
                                <input id="dataNascAluno" type="date" name ="dataNascAluno" />
                            </div>

                        </div>

                    </div>

                </div>

                <div class="btn000">
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
        document.getElementById('fotoAluno').click();
    });

    document.getElementById('fotoAluno').addEventListener('change', function (e) {

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