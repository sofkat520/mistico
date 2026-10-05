<?php 
require_once "../modelos/Oferta.php";

$oferta=new Oferta();
$allowedTags='<p><strong><em><u><h1><h2><h3><h4><h5><h6><img><li><ol><ul><span><div><br><ins><del><small>';
$idoferta=isset($_POST["idoferta"])? limpiarCadena($_POST["idoferta"]):"";
$titulo=isset($_POST["titulo"])? limpiarCadena($_POST["titulo"]):"";
$cuerpo=isset($_POST["editor"])? limpiarCadena($_POST["editor"]):"";
$incluye=isset($_POST["incluye"])? limpiarCadena($_POST["incluye"]):"";
$imagen=isset($_POST["imagen"])? limpiarCadena($_POST["imagen"]):"";
$uno=isset($_POST["uno"])? limpiarCadena($_POST["uno"]):"";
$dos=isset($_POST["dos"])? limpiarCadena($_POST["dos"]):"";
$tres=isset($_POST["tres"])? limpiarCadena($_POST["tres"]):"";
$cuatro=isset($_POST["cuatro"])? limpiarCadena($_POST["cuatro"]):"";
$cinco=isset($_POST["cinco"])? limpiarCadena($_POST["cinco"]):"";
$seis=isset($_POST["seis"])? limpiarCadena($_POST["seis"]):"";
$siete=isset($_POST["siete"])? limpiarCadena($_POST["siete"]):"";
$ocho=isset($_POST["ocho"])? limpiarCadena($_POST["ocho"]):"";
$item=isset($_POST["item"])? limpiarCadena($_POST["item"]):"";

switch ($_GET["op"]){
	case 'guardaryeditar':
		
		
		if (!file_exists($_FILES['imagen']['tmp_name']) || !is_uploaded_file($_FILES['imagen']['tmp_name']))
		{
			$imagen=$_POST["imagenactual"];
		}
		else 
		{
			$ext = explode(".", $_FILES["imagen"]["name"]);
			//if(mime_content_type($_FILES['ebook']['tmp_name']) == 'application/pdf')
			if($_FILES['imagen']['type']=="image/jpg" || $_FILES['imagen']['type']=="image/jpeg" || $_FILES['imagen']['type']=="image/png")
			{
				 //$carpeta="../files/".$rspta['nombre_completo'];
				 $carpeta="../files/ofertas";
				 /*if (!file_exists($carpeta)) {
					 mkdir($carpeta, 0777, true);
				 }*/
				 $imagen="".reset($ext).".".end($ext);
				// if (file_exists($carpeta."/".$imagen))
				if (file_exists($carpeta."/".$imagen))
				{
					//chmod($carpeta."/".$imagen, 0777);
					//array_map('unlink', glob($carpeta."/".$imagen));
					unlink($carpeta."/".$imagen);
					
				}
				 //$imagen ="".$titulo.".".end($ext);
				//move_uploaded_file($_FILES["archivo"]["tmp_name"], $carpeta."/".$archivo);
				move_uploaded_file($_FILES["imagen"]["tmp_name"], $carpeta."/".$imagen);
			}
		}
		if (!file_exists($_FILES['archivo']['tmp_name']) || !is_uploaded_file($_FILES['archivo']['tmp_name']))
        {
            $archivo=$_POST["archivoactual"];
            
		}
		else 
		{
			
			$ext = explode(".", $_FILES["archivo"]["name"]);
			//if(mime_content_type($_FILES['ebook']['tmp_name']) == 'application/pdf')
			if( $_FILES['archivo']['type'] == "application/pdf")
			{
				 $carpeta="../files/ofertas";
				 //$carpeta="../files";
				 if (!file_exists($carpeta)) {
					 mkdir($carpeta, 0777, true);
				 }
                //$archivo ="".$titulo.".".end($ext);
				$archivo ="".reset($ext).".".end($ext);
				if (file_exists($carpeta."/".$archivo))
				{
					unlink($carpeta."/".$archivo);
				}
                
				//move_uploaded_file($_FILES["archivo"]["tmp_name"], $carpeta."/".$archivo);
                move_uploaded_file($_FILES["archivo"]["tmp_name"], $carpeta."/".$archivo);
    
             
            }
          
		}
		if (empty($idoferta)){
			switch($item){
				case 1:
					$incluye=$uno;
				break;
				case 2:
					$incluye=$uno."[".$dos;
				break;
				case 3:
					$incluye=$uno."[".$dos."[".$tres;
				break;
				case 4:
					$incluye=$uno."[".$dos."[".$tres."[".$cuatro;
				break;
				case 5:
					$incluye=$uno."[".$dos."[".$tres."[".$cuatro."[".$cinco;
				break;
				case 6:
					$incluye=$uno."[".$dos."[".$tres."[".$cuatro."[".$cinco."[".$seis;
				break;
				case 7:
					$incluye=$uno."[".$dos."[".$tres."[".$cuatro."[".$cinco."[".$seis."[".$siete;
				break;
				case 8:
					$incluye=$uno."[".$dos."[".$tres."[".$cuatro."[".$cinco."[".$seis."[".$siete."[".$ocho;
				break;
				default:
				$incluye="";

				break;
			}
			
			$rspta=$oferta->insertar($titulo,$cuerpo,$incluye,$imagen,$archivo);
			echo $rspta ? "Oferta registrada" : "Oferta no se pudo registrar: ".$item." : ".$titulo." : ".$cuerpo." : ".$incluye." : ".$imagen." : ".$archivo;
		}
		else {
			switch($item){
				case 1:
					$incluye=$uno;
				break;
				case 2:
					$incluye=$uno."[".$dos;
				break;
				case 3:
					$incluye=$uno."[".$dos."[".$tres;
				break;
				case 4:
					$incluye=$uno."[".$dos."[".$tres."[".$cuatro;
				break;
				case 5:
					$incluye=$uno."[".$dos."[".$tres."[".$cuatro."[".$cinco;
				break;
				case 6:
					$incluye=$uno."[".$dos."[".$tres."[".$cuatro."[".$cinco."[".$seis;
				break;
				case 7:
					$incluye=$uno."[".$dos."[".$tres."[".$cuatro."[".$cinco."[".$seis."[".$siete;
				break;
				case 8:
					$incluye=$uno."[".$dos."[".$tres."[".$cuatro."[".$cinco."[".$seis."[".$siete."[".$ocho;
				break;
				default:
				$incluye="";

				break;
			}

			$rspta=$oferta->editar($idoferta,$titulo,$cuerpo,$incluye,$imagen,$archivo);
			echo $rspta ? "Oferta actualizada" : "Oferta no se pudo actualizar";
		}
	break;

	case 'desactivar':
		$rspta=$oferta->desactivar($idoferta);
 		echo $rspta ? "Oferta Desactivado" : "Oferta no se puede desactivar";
	break;

	case 'activar':
		$rspta=$oferta->activar($idoferta);
 		echo $rspta ? "Oferta activado" : "Oferta no se puede activar";
	break;

	case 'mostrar':
		$rspta=$oferta->mostrar($idoferta);
 		//Codificar el resultado utilizando json
 		echo json_encode($rspta);
	break;

	case 'listar':
		$rspta=$oferta->listar();
 		//Vamos a declarar un array
 		$data= Array();

 		while ($reg=$rspta->fetch_object()){
 			$data[]=array(
 				"0"=>($reg->estado)?'<button class="btn btn-warning" onclick="mostrar('.$reg->id_oferta.')"><i class="fa fa-pencil"></i></button>'.
 					' <button class="btn btn-danger" onclick="desactivar('.$reg->id_oferta.')"><i class="fa fa-close"></i></button>':
 					'<button class="btn btn-warning" onclick="mostrar('.$reg->id_oferta.')"><i class="fa fa-pencil"></i></button>'.
 					' <button class="btn btn-primary" onclick="activar('.$reg->id_oferta.')"><i class="fa fa-check"></i></button>',
 				"1"=>$reg->titulo,
				"2"=>substr(strip_tags(html_entity_decode($reg->cuerpo)),17,80)."...",
				"3"=>$reg->incluye,
				"4"=>'<a href="../files/ofertas/'.$reg->archivo.'" target="_blank"><i class="fa fa-file"></i> '.$reg->archivo.'</a>',
				"5"=>'<img width="150px" height="120px" src="../files/ofertas/'.$reg->imagen.'"></img>',
 				"6"=>($reg->estado)?'<span class="label bg-green">Activado</span>':
 				'<span class="label bg-red">Desactivado</span>'
 				);
 		}
 		$results = array(
 			"sEcho"=>1, //Información para el datatables
 			"iTotalRecords"=>count($data), //enviamos el total registros al datatable
 			"iTotalDisplayRecords"=>count($data), //enviamos el total registros a visualizar
 			"aaData"=>$data);
 		echo json_encode($results);

	break;
}
?>