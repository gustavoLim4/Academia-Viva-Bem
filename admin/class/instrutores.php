<?php 
    require_once('conexao.php');

    class instrutoresClass 

    {
        public $nomeFuncionario;

        public $dataNascFuncionario;

        public $cargoFuncionario;

        public $especialidadeFuncionario;

        public $emailFuncionario;

        public $senhaFuncionario;

        public $telefoneFuncionrio;

        public $dataAdmissaoFuncionario;

        public $statusFuncionario;

        public $fotoFuncionario;

    

    public function Inserir()
    
    {

        $sql = "INSERT INTO tblfuncionarios (

                                            nomeFuncionario ,

                                            dataNascFuncionario,

                                            cargoFuncionario,

                                            especialidadeFuncionario ,

                                            emailFuncionario,

                                            senhaFuncionario , 

                                            telefoneFuncionrio, 

                                            dataAdmissaoFuncionario,

                                            statusFuncionario,

                                            fotoFuncionario) 
                              
                              
                 VALUES
                                     ('".$this->nomeFuncionario ."',

                                      '".$this->dataNascFuncionario."',

                                      '".$this->cargoFuncionario."',

                                      '".$this->especialidadeFuncionario."',

                                      '".$this->emailFuncionario."',

                                      '".$this->senhaFuncionario ."',

                                      '".$this->telefoneFuncionrio."',

                                      '".$this->dataAdmissaoFuncionario."',

                                      '".$this->statusFuncionario ."',

                                      '".$this->fotoFuncionario."')";

         $conn = conexao::Ligarconexao();

         $conn->exec($sql);

    }
    public function ListarInstrutores() {
         
        $sql = "SELECT * FROM tblfuncionarios WHERE statusFuncionario = 'ATIVO' ORDER BY idfuncionario ASC;";
        $conn = conexao::Ligarconexao();
        $resultado = $conn -> query($sql);
        $lista = $resultado -> fetchAll();
        return $lista;

    }


}

 
