<?php
class conexion
{
    private $host = "localhost";
    private $username = "root";
    private $clave = "";
    private $bd = "cuscomistico";
    /*private $username = "wsperuin1_admincs";
    private $clave = "Qxu@zRd7A^BS";
    private $bd = "wsperuin1_cuscomistico";*/
    
    public function __construct(){
        $this->con=mysqli_connect($this->host, $this->username, $this->clave, $this->bd);
        mysqli_set_charset($this->con, "utf8");
        if(mysqli_connect_error()){
            printf("error en la conexion de base de datos %d" ,mysqli_connect_error());
            exit;
        }

    }
    public function query($qu){
        $data = array();
        if($qu!=""){
            if($r = mysqli_query($this->con, $qu)){
                while($row = mysqli_fetch_assoc($r))
                {
                    array_push($data,$row);
                }
                
            }
        }
        return $data;

    }
    public function queryselect($qu){
        $data = array();
        if($qu!=""){
            if($r = mysqli_query($this->con, $qu)){
                $data = mysqli_fetch_array($r);
            }
        }
        return $data;

    }
    public function queryNoselect($qu){
        //insert,delete o update
        $r;
        if($qu!=""){
            $r = mysqli_query($this->con, $qu);
            
            
        }
        return $r;

    }
    public function close(){
        mysqli_close($this->con);
      //  printf("se cerro la base de datos");
    }
}


?>