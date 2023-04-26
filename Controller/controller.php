<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);


 $usuario = new UsuarioController();



class UsuarioController
{
    
    function __construct()
    {
        
      
        if(isset($_POST["action"])){
            $action = $_POST["action"];
        }else if(isset($_GET["action"])){
            $action = $_GET["action"];
        }

        if(isset($action)){
            $this->callAction($action);
        }else{
            $this->loadView("/error/erro.php");
            $msg = "<h2>Nenhuma ação a ser processada...<h2>"; 
            print_r($msg);
        }

    }

    public function callAction(string $functionName = null){

        if (method_exists($this, $functionName)) {
            $this->$functionName();
        } else if(method_exists($this, "preventDefault")) {
            $met = "preventDefault";
            $this->$met();
        } else {
            throw new BadFunctionCallException("Usecase not exists");
        }

    }

    public function loadView(string $path, array $data = null, string $msg = null){

        $caminho = __DIR__."/../views/".$path;
      if(file_exists($caminho)){
        
            require $caminho;

      }else{
        echo ("<h2> Erro ao carregar a view<h2>"); 
      }
    }

    private function Login(){

        $this->loadView("Login/login.php");
    }

    private function PaginaPrincipal(){
        $this->loadView("PaginaPrincipal/PaginaPrincipal.php");
    }


    private function carregarForm(){
        $this->loadView("Formulario/formulario.php");
    }
    

    private function carregarGrafico(){
        $this->loadView("Grafico/grafico.php");
    }
}


?>