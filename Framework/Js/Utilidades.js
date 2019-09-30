// -------------------------------------------
//  Metodos JavaScript
//  ASFALCO
//  Febrero 2011
// -------------------------------------------
//  Control de evento tecla ENTER
//--------------------------------------------
document.onkeypress = function(e){
	var esIE=(document.all);
	var esNS=(document.layers);
	tecla=(esIE) ? event.keyCode : e.which;
	if(tecla==13)
	{
		var quien=$('#enter-en').val();
		switch(quien)
		{
			case "buscador":
				var termino=$('#texto-busqueda').val();
				if(termino=='' || termino==null)
				{
					$("#mensaje-texto").html("Debe ingresar alg\u00fan texto en el cuadro de b\u00fasqueda.");
					$('#mensaje').dialog('open');
					return true;
				}
				else
				{
					$("#dialogo-resultado-busqueda-contenido").html("Debe completar todos los campos del formulario.");
					$('#dialogo-resultado-busqueda').dialog('open');
					return true;
				}
			break;
		}
	}
}
//--------------------------------------------
//  Dialogo alerta
//--------------------------------------------
$(function(){					     
	$("#mensaje").dialog
	({
			resizable: false,
			bgiframe: false,
			autoOpen: false,
			minHeight: 100,
			height: 200,
			width: 400,
			modal: true,
			buttons:{ "Aceptar" : function(){document.location.reload();$(this).dialog("close");}}
	});
});

//--------------------------------------------
//  Dialogo alerta
//--------------------------------------------
$(function(){					     
	$("#dialogo-resultado-busqueda").dialog
	({
			resizable: false,
			bgiframe: false,
			autoOpen: false,
			minHeight: 100,
			height: 650,
			width: 650,
			modal: true,
			buttons:{ "Cerrar" : function(){document.location.reload();$(this).dialog("close");}}
	});
});

function AS_EnviarCorreo()
{   
    // ---------------------
	// Desactivar Cache
	// ---------------------
	$.ajaxSetup({cache: false }); 
	// ---------------------
	// Proceso
	// ---------------------
	var _P_NOMBRES = $("#nombres").val();
	var _P_APELLID = $("#apellidos").val();
	var _P_EMAIL   = $("#email").val();
	var _P_TELEFON = $("#telefono").val();
	var _P_CELULAR = $("#celular").val();
	var _P_COMENTA = $("#comentario").val();
	if(_P_NOMBRES=='' || _P_APELLID=='' || _P_EMAIL=='' || _P_TELEFON=='' || _P_CELULAR=='' || _P_COMENTA=='')
	{
		$("#mensaje-texto").html("Debe completar todos los campos del formulario.");
		$('#mensaje').dialog('open');
		return true;
	}
	else
	{
		$.get("Aplicaciones/ServidorCorreo/app_envio_mail_contacto.php", 
		{
			P_NOMBRES:_P_NOMBRES,
			P_APELLID:_P_APELLID,
			P_EMAIL:_P_EMAIL,
			P_TELEFON:_P_TELEFON,
			P_CELULAR:_P_CELULAR,
			P_COMENTA:_P_COMENTA
		},
		function(data)
		{
			if(data=="OK")
			{
				$("#nombres").val("");
				$("#apellidos").val("");
				$("#email").val("");
				$("#telefono").val("0");
				$("#celular").val("0");
				$("#comentario").val("");
				$("#mensaje-texto").html("Gracias, su mensaje ha sido enviado.");
				$('#mensaje').dialog('open');
				return true;
			}	
			else
			{
				$("#mensaje-texto").html("Ocurrio un problema al tratar de enviar su mensaje, por favor intente mas tarde.");
				$('#mensaje').dialog('open');
				return true;
			}
		});
	}



}