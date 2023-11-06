<?php

require_once('conexao.php');


class contatoClass
{
    public $nomeContato;
    public $emailContato;
    public $telefoneContato;
    public $mensagemContato;
    
    
    public function Inserir()
    {
        $sql = " INSERT INTO tblcontato (nomeContato, 
                                        emailContato, 
                                        telefoneContato, 
                                        mensagemContato)

                VALUES 
                                       ('" . $this->nomeContato . "', 
                                        '" . $this->emailContato . "', 
                                        '" . $this->telefoneContato . "',
                                        '" . $this->mensagemContato . "')";


        $conn = conexao::Ligarconexao();

        $conn->exec($sql);

    }
    public function ListarContato() {

        $sql = "SELECT * FROM tblcontato ORDER BY idContato ASC";
        $conn = conexao :: Ligarconexao();
        $resultado = $conn -> query($sql);
        $lista = $resultado -> fetchAll();
        return $lista;


    }



} // FIM CLASS CONTATO
