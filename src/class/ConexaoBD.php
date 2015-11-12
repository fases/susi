<?php 

/*
Singleton da classe mysqli para centralizar de forma segura o acesso ao bd.
*/
class ConexaoBD extends mysqli{

    public static $instance;

    /*
    Construtor privado, inacessível fora desta classe.
        @param: strings que identifiquem a localização, nome de usuário
        e senha do server e o nome do banco de dados.
    */
    private function __construct($servidor, $usuario, $senha, $bd){
        parent::__construct($servidor, $usuario, $senha, $bd);
    }

    /*
    Obtem instância única desta classe. Se já houver uma instãncia na memória
    ela será retornada, mas se não houver então ela é criada e depois retornada.
    Na prática, para usar objeto dessa classe fora de seu escopo, substitui isso:
    new ConexaoBD(...)
    por isso:
    ConexaoBD::getInstance()
        @return: objeto do tipo ConexaoBD (mysqli) já configurado e pronto
        para uso.
    */
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

?>
