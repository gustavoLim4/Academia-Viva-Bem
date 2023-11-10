<?php


    //PARA ENVIAR VIA "POST" PARA O BANCO DE DADOS 👇🏽

if (isset($_POST['nomeAluno'])) { // 👈🏽 PARA SABER SE A VARIAVEL ESTA DEFINIDA

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

    

    if (move_uploaded_file($arquivo['tmp_name'], '../img/aluno/' . $arquivo['name'])) {  //  👈🏽 "CAMINHO" PARA QUE VA DIRETO PARA A PASTA DE ARQUIVOS "aluno" 

        $fotoAluno = 'aluno/' . $arquivo['name']; // exercicio/agachamento.png           //  👈🏽  "NOME" PARA QUE VA DIRETO PARA A PASTA DE ARQUIVOS "aluno" 

    } else {

        throw new Exception('Erro : Não foi possivel realizar o ulpload a imagem. '); // 👈🏽   CASO DER ERRO ESSA MENSAGEM SERA MOSTRA NA TELA

    }
    
   // PARA APARECER NO SITE O NOVO CADASTRO 👇🏽

    require_once('class/alunos.php'); //PUXAR A PAGINA QUE ESTA DENTRO DO "class" NOME DA PAGINA "alunos.php"

    $aluno = new alunosClass();

    $aluno->nomeAluno = $nomeAluno; // ATRIBUIÇÕES FUNÇÃO "CADASTRAR"

    $aluno->dataNascAluno = $dataNascAluno;  // ATRIBUIÇÕES FUNÇÃO "CADASTRAR"

    $aluno->emailAluno = $emailAluno;  // ATRIBUIÇÕES FUNÇÃO "CADASTRAR"

    $aluno->senhaAluno = $senhaAluno; // ATRIBUIÇÕES FUNÇÃO "CADASTRAR"

    $aluno->statusAluno = $statusAluno;  // ATRIBUIÇÕES FUNÇÃO "CADASTRAR"

    $aluno->fotoAluno = $fotoAluno;  // ATRIBUIÇÕES FUNÇÃO "CADASTRAR"


    $aluno->Cadastrar();
}



?>

<!-- 👇🏽 CAIXA DE PREENCHIMENTO DO FORMULARIO 👇🏽  -->

<div class="col-md-12">
    


    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title"> Cadastro de Alunos</h3>
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
                            <label for="nome" class="col-sm-2 col-form-label">Nome:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nomeAluno" name="nomeAluno"
                                    required="" placeholder="*Informe seu nome:">
                            </div>
                        </div>

                        <div class="form-group10 ">
                            <label for="email" class="col-sm-2 col-form-label">E-mail:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="emailAluno" name="emailAluno"
                                    required="" placeholder="*Informe seu E-mail:">
                            </div>
                        </div>

                        <div class="form-group10 ">
                            <label for="senha" class="col-sm-2 col-form-label">Senha:</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="senhaAluno" name="senhaAluno"
                                    required="" placeholder="*digite sua senha:">
                            </div>
                        </div>
                        <div class="dois22" >
                            <div class="form-group col-sm-4">

                                <select class="form-select col-sm-2" name="statusAluno" id="statusAluno" required>
                                    <option selected="">Status do Aluno</option>
                                    <option value="ATIVO">ATIVO</option>
                                    <option value="DESATIVA">DESATIVADO</option>
                                    <option value="INATIVO">INVALIDO</option>

                                </select>
                            </div>

                            <div class="data">
                                <input id="dataNascAluno" type="date" name ="dataNascAluno" id = "dataNascAluno" />
                            </div>

                        </div>

                    </div>

                </div>

                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button type="submit" class="btn btn-primary">Cadastrar Aluno</button>
                </div>

            </div>
    </div>

</div>

</form>
</div>

</div>


<script>

    // 👇🏽script para o input se transformar em uma "imagem" quando pegamos a foto no explorador de arquivos ela monstre no lugar da "imagem"
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