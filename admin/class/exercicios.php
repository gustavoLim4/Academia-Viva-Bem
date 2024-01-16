<?php

require_once('conexao.php');


class ExerciciosClass
{
    public $idExercicio;
    public $nomeExercicio;
    public $descricaoExercicio;
    public $grupoMuscularExercicio;
    public $statusExercicio;
    public $fotoExercicio;
    public $altExercicio;





    public function __construct($id = false)
    {
        if ($id) {
            $this->idExercicio = $id;
            $this->Carregar();
        }
    }



    public function Inserir()
    {
        $sql = " INSERT INTO tblexercicios (nomeExercicio, 
                                            descricaoExercicio, 
                                            grupoMuscularExercicio,
                                            statusExercicio, 
                                            fotoExercicio)

                VALUES 
                                            ('" . $this->nomeExercicio . "', 
                                             '" . $this->descricaoExercicio . "',
                                             '" . $this->grupoMuscularExercicio. "',  
                                             '" . $this->statusExercicio . "',
                                             '" . $this->fotoExercicio . "')";


        $conn = conexao::Ligarconexao();

        $conn->exec($sql);

    }
    public function ListarExercicio()
    {

        $sql = "SELECT * FROM tblexercicios WHERE statusExercicio = 'ATIVO' ORDER BY idExercicio ASC";
        $conn = conexao::Ligarconexao();
        $resultado = $conn->query($sql);
        $lista = $resultado->fetchAll();
        return $lista;


    }
    // cadastrar 
    public function Cadastrar()
    {


        $query = " INSERT INTO tblexercicios (nomeExercicio, 
                                              descricaoExercicio, 
                                              grupoMuscularExercicio,
                                              statusExercicio, 
                                              fotoExercicio)
                                              
                                              
            VALUES 
                                       ('" . $this->nomeExercicio . "', 
                                        '" . $this->descricaoExercicio . "', 
                                        '" . $this->grupoMuscularExercicio. "', 
                                        '" . $this->statusExercicio . "',
                                        '" . $this->fotoExercicio . "')";

        $conn = Conexao::LigarConexao();
        $conn->exec($query);

        echo "<script> document.location='index.php?p=exercicios' </script>";

    }

    public function Carregar()
    {

        $query = "SELECT * FROM tblexercicios WHERE idExercicio = " . $this->idExercicio;
        $conn = conexao::Ligarconexao();
        $resultado = $conn->query($query);
        $lista = $resultado->fetchAll();

        foreach ($lista as $linha) {
            $this->nomeExercicio = $linha['nomeExercicio'];
            $this->descricaoExercicio = $linha['descricaoExercicio'];
            $this->grupoMuscularExercicio	 = $linha['grupoMuscularExercicio'];
            $this->statusExercicio = $linha['statusExercicio'];
            $this->fotoExercicio = $linha['fotoExercicio'];


        }

    }

    public function Atualizar()
    {
        $query = "UPDATE tblexercicios SET nomeExercicio =                     '" . $this->nomeExercicio . "',
                                            altExercicio =                     '" . $this->altExercicio . "', 
                                            descricaoExercicio =               '" . $this->descricaoExercicio . "',
                                            categoriasExercicio =              '" . $this->grupoMuscularExercicio. "',
                                            statusExercicio =                  '" . $this->statusExercicio . "',
                                            fotoExercicio =                    '" . $this->fotoExercicio . "' 
                                             WHERE tblexercicios.idExercicio =" . $this->idExercicio;

        $conn = conexao::Ligarconexao();
        $conn->exec($query);
        echo "<script> document.location='index.php?p=exercicios'</script>";


    } // FIM CLASS CONTATO
}