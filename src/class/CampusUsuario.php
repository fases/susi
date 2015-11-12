<?php
/*
DAO da tabela de usuários.
*/
class CampusUsuario{
    
    const TABELA = "campus_usuario"; // meta
    
    private $id; // auto_increment
    private $nome; // string max len: 50
    private $senha; // apenas o hash, nunca armazenar string legível!
    private $contato; //  string max len: 100
    
    /*
    TODO
    */
    public function __construct($id, $nome, $senha, $contato){
        // TODO: atribuir valores aos atributos
    }
    
    /*
    Consulta todos os registros da tabela.
        @Retorna: resultado da mysqli query sem cláusula where.
    */
    public static function consultaTodos(){
        
        $bd = ConexaoBD::getInstance();
        $sql = "select * from ".TABELA;
        
        return $bd->query($sql);
        
    }
    
    /*
    Consulta todos os registros da tabela com o id passado.
        @param: campo id numérico (já escapado) do registro
        @Retorna: objeto do tipo CampusUsuario encontrado no bd com
        esse $id.
    */
    public static function getInstancePorID($id){
        $bd = ConexaoBD::getInstance();
        $sql = "select * from ".TABELA." where id=".$id;
        
        // TODO: dar fetch e retornar objeto do tipo CampusUsuario
        $bd->query($sql);
        
    }
    
}

?>
