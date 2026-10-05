<?php
require_once "Conexion.php";
class Oferta
{
    public function __construct(){

    }
    public function mostrar_todo(){
        $data = array();
        $datas= array();
        $db =new Conexion();
        $data= $db->query("SELECT * from oferta where estado='1' order by id_oferta desc");
        $db->close();
        unset($db);
        return $data!=""?$data:$datas;

    }
    
}

?>