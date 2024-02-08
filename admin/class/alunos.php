<?php

require_once('conexao.php');

class alunosClass
{

    public $idAluno;
    public $nomeAluno;
    public $dataNascAluno;
    public $emailAluno;
    public $senhaAluno;
    public $dataCadAluno;
    public $statusAluno;
    public $fotoAluno;


    public function Inserir()
    {
        $sql = "INSERT INTO tblalunos (   
                                             nomeAluno,
                                             dataNascAluno,
                                             emailAluno,
                                             senhaAluno,
                                             dataCadAluno,
                                             statusAluno, 
                                             fotoAluno) 
                                             
                    VALUES
                                        
                                           ('" . $this->nomeAluno . "',    
                                            '" . $this->dataNascAluno . "',    
                                            '" . $this->emailAluno . "',    
                                            '" . $this->senhaAluno . "',    
                                            '" . $this->dataCadAluno . "',    
                                            '" . $this->statusAluno . "',    
                                            '" . $this->fotoAluno . "')";

        $conn = conexao::Ligarconexao();

        $conn->exec($sql);
    }

    public function ListarAlunos()
    {

        $sql = "SELECT * FROM tblalunos WHERE statusAluno = 'ATIVO' ORDER BY idAluno ASC;";
        $conn = conexao::Ligarconexao();
        $resultado = $conn->query($sql);
        $lista = $resultado->fetchAll();
        return $lista;
    }

    public function Cadastrar()
    {

        // insert direto do banco de dados puxando tudo que esta la dentro 👇🏽  

        $query = " INSERT INTO tblalunos (  nomeAluno,
                                                dataNascAluno,
                                                emailAluno, 
                                                senhaAluno,
                                                statusAluno, 
                                                fotoAluno) 
            
                    VALUES
                                        -- THIS -> 👇🏽 para acessar propriedades/métodos do objeto

                                            ('" . $this->nomeAluno . "',    
                                            '" . $this->dataNascAluno . "',    
                                            '" . $this->emailAluno . "',    
                                            '" . $this->senhaAluno . "',    
                                            '" . $this->statusAluno . "',    
                                            '" . $this->fotoAluno . "') ";

        $conn = Conexao::LigarConexao();
        $conn->exec($query);

        echo "<script>document.location='index.php?p=alunos'</script>"; // 👈🏽 QUANDO TERMINAR DE PREECHER VOLTARA PARA A TABELA ATULIZADA COM NOVOS DADOS 

    }

    public function desativar()
    {
        $sql = "UPDATE tblalunos set statusAluno = 'DESATIVADO' where idAluno = $this->idAluno";
        $conn = conexao::Ligarconexao();
        $conn->exec($sql);

        echo "<script> document.location='index.php?p=alunos' </script>";
    }

    public function verificarLogin()
    {

        $sql = "SELECT * FROM tblalunos WHERE emailAluno = '".$this->emailAluno."' and senhaAluno = '".$this->senhaAluno."'";
        $conn = conexao::Ligarconexao();
        $resultado = $conn->query($sql);
        $aluno = $resultado->fetch();

        if ($aluno) {
            return $aluno['idAluno'];
        } else {
            return false;
        }
    }
}

if (isset($_POST['email'])) {

    $aluno = new alunosClass();

    $emailLogin = $_POST['email'];
    $senhaLogin = $_POST['password'];


    $aluno->emailAluno = $emailLogin;
    $aluno->senhaAluno = $senhaLogin;

    if ($idAluno = $aluno->verificarLogin()) {
       session_start();
       $_SESSION['$idAluno'] = $idAluno;
       echo json_encode (['success'=> true ,'message' => 'Login foi realizado com sucesso' , 'idAluno' => $idAluno]);
    } else {
        echo json_encode (['success'=> true ,'message' => 'Email ou senha invalido']);
    }
}
