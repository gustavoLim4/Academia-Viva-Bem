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





    
    public function verificarLogin()
    {

        $sql = "SELECT * FROM tblfuncionarios WHERE emailFuncionario = '".$this->emailFuncionario."' and senhaFuncionario = '".$this->senhaFuncionario."'";
        $conn = conexao::Ligarconexao();
        $resultado = $conn->query($sql);
        $funcionario = $resultado->fetch();

        if ($funcionario) {
            return $funcionario['idFuncionario'];
        } else {
            return false;
        }
    }


}

if(isset($_POST['email'])){
    //verificação no Network
    //print_r(($_POST['email']));


    $funcionario = new instrutoresClass();

    $emailFuncionario = $_POST['email'];
    $senhaFuncionario = $_POST['password'];

    $funcionario->emailFuncionario = $emailLogin;
    $funcionario->senhaFuncionario = $senhaLogin;

    if($idFuncionario = $funcionario->verificarLogin()){
        //Login Ok
        //print_r($idAluno);

        session_start();
        $_SESSION['idFuncionario'] = $idFuncionario;
        echo json_encode(['success' => true, 'message' => 'Login realizado com sucesso', 'idFuncionario' => $idFuncionario]);

    }else{
        //Login Not Ok
        //print_r('erro de login');
        echo json_encode(['success' => false, 'message' => 'Email ou Senha inválido']);
    }


}

 
