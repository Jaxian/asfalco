<?PHP
	// --------------------------------------------------------------
	// PRODUCTO : WEBSITE ASFALCO
	// CLIENTE	: ASFALCO S.A.
	// VERSION	: 1.1 
	// FECHA	: ENERO, 2011
	// --------------------------------------------------------------
	// DISEÑO	: LAZCANO P.2011
	// CODIGO	: LAZCANO P.2011
	// --------------------------------------------------------------
	// PROPOSITO: "ENVIO DE CORREOS"	
	// --------------------------------------------------------------
	

	$P_NOMBRES = $_REQUEST['P_NOMBRES'];
	$P_APELLID = $_REQUEST['P_APELLID'];
	$P_EMAIL   = $_REQUEST['P_EMAIL'];
	$P_TELEFON = $_REQUEST['P_TELEFON'];
	$P_CELULAR = $_REQUEST['P_CELULAR'];
	$P_COMENTA = $_REQUEST['P_COMENTA'];

	$destinatario="contacto@asfalco.cl"; 
	$asunto ="Asfalco - Nuevo mensaje de contacto"; 
	$cuerpo =" 
	<html> 
	<head> 
	<title>".$asunto."</title> 
	</head> 
	<body>
	<br>
	<br>
	<div>El siguiente mensaje ha sido enviado desde la pagina de contacto: </div>
	<hr>
	<div>Nombre:   ".$P_NOMBRES." ".$P_APELLID."</div>
	<div>E-mail:   ".$P_EMAIL."</div>
	<div>Telefono: ".$P_TELEFON."</div>
	<div>Celular:  ".$P_CELULAR."</div> 
	<hr>
	<div style='font-family:arial;font-size:12px; color:#000'>".$P_COMENTA."</div>
	</body> 
	</html> 
	"; 
	
	
	$headers = "MIME-Version: 1.0\r\n"; 
	$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
	$headers .= "From: Asfalco - Contacto\r\n"; 
	$headers .= "Reply-To: ".$destinatario."\r\n"; 
	$headers .= "Return-path: ".$destinatario."\r\n"; 
	$headers .= "Cc: hbarbieri@asfalco.cl\r\n";
	$headers .= "Cc: privera@asfalco.cl\r\n"; 
	$headers .= "Cc: jdebarbieri@asfalco.cl\r\n"; 
	//$headers .= "Bcc: barbieri.humberto@gmail.com\r\n"; 
	mail($destinatario,$asunto,$cuerpo,$headers);
	echo "OK"; 

?>