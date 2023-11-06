<?php

require_once('conexao.php');


class ExerciciosClass
{
    public $nomeExercicio;
    public $descricaoExercicio;
    public $statusExercicio;
    public $fotoExercicio;
    public $emailFuncionario;
  
  

    public function Inserir()
    {
        $sql = " INSERT INTO tblexercicios (nomeExercicio, 
                                            descricaoExercicio, 
                                            categoriasExercicio,
                                            statusExercicio, 
                                            fotoExercicio)

                VALUES 
                                       ('" . $this->nomeExercicio . "', 
                                        '" . $this->descricaoExercicio . "',
                                        '" . $this->categoriasExercicio ."',  
                                        '" . $this->statusExercicio . "',
                                        '" . $this->fotoExercicio . "')";


        $conn = conexao::Ligarconexao();

        $conn->exec($sql);

    }
    public function ListarExercicio() {

        $sql = "SELECT * FROM tblexercicios WHERE statusExercicio = 'ATIVO' ORDER BY idExercicio ASC";
        $conn = conexao :: Ligarconexao();
        $resultado = $conn -> query($sql);
        $lista = $resultado -> fetchAll();
        return $lista;


    }
    // cadastrar 
    public function Cadastrar(){


        $query = " INSERT INTO tblexercicios (nomeExercicio, 
                                              descricaoExercicio, 
                                              categoriasExercicio,
                                              statusExercicio, 
                                              fotoExercicio)
                                              
                                              
            VALUES 
                                       ('" . $this->nomeExercicio . "', 
                                        '" . $this->descricaoExercicio ."', 
                                        '" . $this->categoriasExercicio ."', 
                                        '" . $this->statusExercicio . "',
                                        '" . $this->fotoExercicio . "')";

            $conn = Conexao::LigarConexao();
            $conn->exec($query);

           echo "<script> document.location='index.php?p=exercicios' </script>";

    }

    



} // FIM CLASS CONTATO
