<?php 

// Singleton
class ConexaoBD extends mysqli{

    public static $instance;

    private function __construct($servidor, $usuario, $senha, $bd){
        parent::__construct($servidor, $usuario, $senha, $bd);
    }

    public static function getInstance(){
        if (!isset(ConexaoBD::$instance)){
            ConexaoBD::$instance = new ConexaoBD("localhost", // host 
                                                 "root",  // user
                                                 "", // pass
                                                 "susi_bd"); // bd
        }
        
        return ConexaoBD::$instance;
        
    }

}

//$bd = ConexaoBD::getInstance();
//echo $bd->host_info;

?>
