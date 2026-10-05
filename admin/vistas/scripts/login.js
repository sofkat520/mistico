$("#frmAcceso").on('submit',function(e)
{
	e.preventDefault();
    logina=$("#logina").val();
    clavea=$("#clavea").val();
    //alert("si") si no da revisar en modelo verificar y quitar el tributo nombre y en ajax cambiar nombre por usuario
    $.post("../ajax/usuario.php?op=verificar",
        {"logina":logina,"clavea":clavea},
        function(data)
        {
            
        if (data!="null")
        {
            
            $(location).attr("href","oferta.php");            
        }
        else
        {
            
            bootbox.alert("Usuario y/o Password incorrectos");
        }
        });
})