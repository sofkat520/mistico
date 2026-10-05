<?php 
//Incluímos inicialmente la conexión a la base de datos
require "../config/Conexion.php";

Class Oferta
{
	//Implementamos nuestro constructor
	public function __construct()
	{

	}

	//Implementamos un método para insertar registros
	public function insertar($titulo,$cuerpo,$incluye,$imagen,$archivo)
	{
		$sql="INSERT INTO oferta (titulo,cuerpo,incluye,imagen,archivo,estado)
		VALUES ('$titulo','htmlspecialchars($cuerpo)','$incluye','$imagen','$archivo',1)";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para editar registros
	public function editar($idoferta,$titulo,$cuerpo,$incluye,$imagen,$archivo)
	{
		$sql="UPDATE oferta SET titulo='$titulo',imagen='$imagen',cuerpo='htmlspecialchars($cuerpo)',incluye='$incluye', archivo='$archivo' WHERE id_oferta='$idoferta' ";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para desactivar registros
	public function desactivar($idoferta)
	{
		$sql="UPDATE oferta SET estado='0' WHERE id_oferta='$idoferta'";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para activar registros
	public function activar($idoferta)
	{
		$sql="UPDATE oferta SET estado='1' WHERE id_oferta='$idoferta'";
		return ejecutarConsulta($sql);
	}

	//Implementar un método para mostrar los datos de un registro a modificar
	public function mostrar($idoferta)
	{
		$sql="SELECT * FROM oferta WHERE id_oferta='$idoferta'";
		return ejecutarConsultaSimpleFila($sql);
	}
	
	//Implementar un método para listar los registros
	public function listar()
	{
		$sql="select * from oferta order by id_oferta desc ";
		return ejecutarConsulta($sql);		
	}
	
	
}

?>