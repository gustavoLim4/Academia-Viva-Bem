<?php

require_once('conexao.php');

class alunosClass
{

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

    public function Cadastrar() {

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

}
