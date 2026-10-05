var tabla;

//Función que se ejecuta al inicio
function init(){
	mostrarform(false);
	listar();
	$("#formulario").on("submit",function(e)
	{
		guardaryeditar(e);	
	})
	//Cargamos los items al select categoria
	$("#imagenmuestra").hide();
}

//Función limpiar
function limpiar()
{
	const progress1 = document.getElementById('progress-bar1');
	const progress2 = document.getElementById('progress-bar12');
	//progres
	
	//fin
	progress1.setAttribute('value', 0);
    progress1.nextElementSibling.nextElementSibling.nextElementSibling.innerText = "0%"; 
	//progress
	progress2.setAttribute('value', 0);
    progress2.nextElementSibling.nextElementSibling.nextElementSibling.innerText = "0%"; 
	//fin
	//fotos
	$("#imagenmuestra").attr("src","");
	$("#imagen").val("");
	$("#imagenactual").val("");
	$("#imagenmuestra").hide();
	$("#btn_pr").hide();
	//fin
	$("#archivo").val("");
	$("#archivol").val("");
	$("#archivoactual").val("");
	$("#archivol").hide();
	//nicEditors.findEditor ('editor').setContent ('');
	
	$("#titulo").val("");
	$("#editor").val("");
	$("#imagenmuestra").attr("src","");
	$("#imagen").val("");
	$("#idoferta").val("");
	$("#imagenactual").val("");
	$("#imagenmuestra").hide();
	//nicEditors.findEditor ('editor').setContent ('<strong> Algo de HTML </strong> aquí');
	$("#btn_pra").hide();
	//listas
	for(i=1;i<=8;i++)
	{
		document.getElementById(""+i).style.display = 'none';
	}
	$("#uno").val("");
	$("#dos").val("");
	$("#tres").val("");
	$("#cuatro").val("");
	$("#cinco").val("");
	$("#seis").val("");
	$("#siete").val("");
	$("#ocho").val("");
	$('#item').selectpicker('refresh');
	$('#item').selectpicker('val',0);
}

//Función mostrar formulario
function mostrarform(flag)
{
	limpiar();
	if (flag)
	{
		$("#listadoregistros").hide();
		$("#formularioregistros").show();
		$("#btnGuardar").prop("disabled",false);
		$("#btnagregar").hide();
		nicEditors.findEditor ('editor').setContent ('');
		
		
	}
	else
	{
		$("#listadoregistros").show();
		$("#formularioregistros").hide();
		$("#btnagregar").show();
	}
}

//Función cancelarform
function cancelarform()
{
	limpiar();
	mostrarform(false);
}

//Función Listar
function listar()
{
	tabla=$('#tbllistado').dataTable(
	{
		"aProcessing": true,//Activamos el procesamiento del datatables
	    "aServerSide": true,//Paginación y filtrado realizados por el servidor
	    dom: 'Bfrtip',//Definimos los elementos del control de tabla
	    buttons: [		          
		            'copyHtml5',
		            'excelHtml5',
		            'csvHtml5',
		            'pdf'
		        ],
		"ajax":
				{
					url: '../ajax/oferta.php?op=listar',
					type : "get",
					dataType : "json",						
					error: function(e){
						console.log(e.responseText);	
					}
				},
		"bDestroy": true,
		"iDisplayLength": 5,//Paginación
	    "order": [[ 0, "desc" ]]//Ordenar (columna,orden)
	}).DataTable();
}
//Función para guardar o editar

function guardaryeditar(e)
{
	
	e.preventDefault(); //No se activará la acción predeterminada del evento
	$("#btnGuardar").prop("disabled",true);
	var nicE = new nicEditors.findEditor('editor');
	/*var nicE1 = new nicEditors.findEditor('editor1');
	var nicE2 = new nicEditors.findEditor('editor2');
	var nicE3 = new nicEditors.findEditor('editor3');*/

	var formData = new FormData($("#formulario")[0]);
	formData.append("editor",nicE.getContent());
	/*formData.append("editor1",nicE1.getContent());
	formData.append("editor2",nicE2.getContent());
	formData.append("editor3",nicE3.getContent());*/
	$.ajax({
		url: "../ajax/oferta.php?op=guardaryeditar",
	    type: "POST",
	    data: formData,
	    contentType: false,
	    processData: false,

	    success: function(datos)
	    {                    
	          bootbox.alert(datos);	          
	          mostrarform(false);
	          tabla.ajax.reload();
	    }

	});
	limpiar();
}

function decodeHtml(str)
{
    var map =
    {
        '&amp;': '&',
        '&lt;': '<',
        '&gt;': '>',
        '&quot;': '"',
        '&#039;': "'"
    };
    return str.replace(/&amp;|&lt;|&gt;|&quot;|&#039;/g, function(m) {return map[m];});
}

function mostrar(idoferta)
{
	$.post("../ajax/oferta.php?op=mostrar",{idoferta : idoferta}, function(data, status)
	{
		var cadena1=["cero","uno","dos","tres","cuatro","cinco","seis","siete","ocho"];
		data = JSON.parse(data);		
		mostrarform(true);
		//fotos
		if(data.imagen!="")
		{
		$("#imagenmuestra").show();
		$("#imagenmuestra").attr("src","../files/ofertas/"+data.imagen);
		}
		$("#imagenactual").val(data.imagen);
		//fin
		//alert();
		//$('#idcategoria').selectpicker('refresh');
		$("#titulo").val(data.titulo);
		//$("#editor").val("quesooooo");
		//$("#editor").val(decodeHtml(data.noticias).substr(17, decodeHtml(data.noticias).length-18));
		nicEditors.findEditor ('editor').setContent (decodeHtml(data.cuerpo).substr(17, decodeHtml(data.cuerpo).length-18));
		$("#imagenmuestra").show();
		$("#imagenmuestra").attr("src","../files/ofertas/"+data.imagen);
		$("#imagenactual").val(data.imagen);
		 $("#idoferta").val(data.id_oferta);
		 $("#archivoactual").val(data.archivo);
		 $("#archivol").val(data.archivo);
		 $("#archivol").show();
		 cadena=data.incluye;
		 if(cadena=="")
			{
				$('#item').selectpicker('refresh');
				$('#item').selectpicker('val',0);	
			}else{
				cadena_separada=cadena.split("[");
				valores=cadena_separada.length;
			   for(i=1;i<=8;i++)
			   {
				   if(i<=valores)
				   {
					   document.getElementById(""+i).style.display = 'block';
					   $("#"+cadena1[i]).val(cadena_separada[i-1]);	
				   }
			   }
			   $('#item').selectpicker('refresh');
			   $('#item').selectpicker('val',valores);	
			}
		
		
		

 		//generarbarcode();

 	})
}

//Función para desactivar registros
function desactivar(idoferta)
{
	bootbox.confirm("¿Está Seguro de desactivar la oferta?", function(result){
		if(result)
        {
        	$.post("../ajax/oferta.php?op=desactivar", {idoferta : idoferta}, function(e){
        		bootbox.alert(e);
	            tabla.ajax.reload();
        	});	
        }
	})
}

//Función para activar registros
function activar(idoferta)
{
	bootbox.confirm("¿Está Seguro de activar la oferta?", function(result){
		if(result)
        {
        	$.post("../ajax/oferta.php?op=activar", {idoferta : idoferta}, function(e){
        		bootbox.alert(e);
	            tabla.ajax.reload();
        	});	
        }
	})
}

//función para generar el código de barras
function generarbarcode()
{
	codigo=$("#codigo").val();
	JsBarcode("#barcode", codigo);
	$("#print").show();
}

//Función para imprimir el Código de barras
function imprimir()
{
	$("#print").printArea();
}
function limpiar_prog1()
{
	const progress1 = document.getElementById('progress-bar1');
	progress1.setAttribute('value', 0);
    progress1.nextElementSibling.nextElementSibling.nextElementSibling.innerText = "0%"; 
	$("#imagen").val("");
	$("#btn_pr").hide();
}
function limpiar_prog(bandera)
{
    switch(bandera)
    {
        case 2:
            const progress1 = document.getElementById('progress-bar12');
            progress1.setAttribute('value', 0);
            progress1.nextElementSibling.nextElementSibling.nextElementSibling.innerText = "0%"; 
            $("#archivo").val("");
            $("#btn_pra").hide();
            break;
        case 1:
            const progress2 = document.getElementById('progress-bar1');
            progress2.setAttribute('value', 0);
            progress2.nextElementSibling.nextElementSibling.nextElementSibling.innerText = "0%"; 
            $("#imagen").val("");
            $("#btn_pr").hide();
            break;
    }
	
}

function Citem(valor)
{
	//alert();
	var cadena=["cero","uno","dos","tres","cuatro","cinco","seis","siete","ocho"];

	if(valor!=0)
	{
		for(i=1;i<=8;i++)
		{
			if(i<=valor)
			{
				document.getElementById(""+i).style.display = 'block';
			}else{
				document.getElementById(""+i).style.display = 'none';
				$("#"+cadena[i]).val("");
			}
			
		}
	}else{
		for(i=1;i<=8;i++)
		{
			document.getElementById(""+i).style.display = 'none';
			$("#"+cadena[i]).val("");	
		}
	}
	
	
}
init();