<?php
include("ConexaoBD.php");
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
    Construtor, cria uma instância local qualquer.
        @param: atributos válidos $id numérico, $nome e $contato string e
        hash de senha em $senha.
    */
    public function __construct($id, $nome, $senha, $contato){
        
        $this->id = $id;
        $this->nome = $nome;
        $this->senha = $senha;
        $this->contato = $contato;

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
        o $id correspondente;
        ou false caso tenha ocorrido alguma falha ou nada tiver sido
        encontrado no bd com esse $id.
    */
    public static function getInstancePorId($id){
        $bd = ConexaoBD::getInstance();

        $sql = "select * from ".self::TABELA." where id=".$id;

        if ($res = $bd->query($sql)){
            if ($res->num_rows){
                
                $row = $res->fetch_array(MYSQLI_ASSOC);
                return new CampusUsuario($row["id"],
                                         $row['nome'], 
                                         $row['senha'], 
                                         $row['contato']);
            }
            return false;
        }
        return false;
    }

}

?>
