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
	// PROPOSITO: "Pagina de inicio"	
	// --------------------------------------------------------------

	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html"; charset="iso-8859-1" http-equiv="Content-Type"/>
<title>Asfalco</title>
    
    <meta charset="utf-8">
	<link rel="stylesheet" href="Framework/reset.css" 		type="text/css" media="screen">
    <link rel="stylesheet" href="Framework/style.css" 		type="text/css" media="screen">
    <link rel="stylesheet" href="Framework/layout.css" 		type="text/css" media="screen">   
	<link rel="stylesheet" href="Css/coda-slider-2.0.css" 	type="text/css" media="screen" />
	<link rel="stylesheet" href="Framework/css/ui-lightness/jquery-ui-1.8.9.custom.css" type="text/css" />
		 
    <script src="Framework/jquery-1.4.4.min.js"  	  type="text/javascript"></script>
	<script src="Framework/jquery-ui-1.8.9.custom.min.js" 	type="text/javascript"></script> 
	<script src="Framework/jquery.faded.js" 		  type="text/javascript"></script>
    <script src="Framework/jquery.easing.1.3.js"	  type="text/javascript"></script>
	<script src="Framework/jquery.coda-slider-2.0.js" type="text/javascript"></script>
	<script src="Js/Utilidades.js" type="text/javascript"></script>
	<script type="text/javascript">
		$().ready(function(){$('#coda-slider-1').codaSlider();});
	</script>
    <style type="text/css"> 
	 html, body
	 {
		margin: 0;
		padding: 0;
		font-family: arial;
		font-size:87%;
	}
	</style>




</head>

<body id="page1">
<div class="main">
	<div id="top">
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
	  <tr>
		<td width="73%"><div style="cursor:hand; cursor: pointer;">
		<?php
			
			$dia = date ("d");
			$mes = date ("m");
			$ano = date ("Y");
			
			if ($mes == 1) {
			$mes = "Enero";
			}
			if ($mes == 2) {
			$mes = "Febrero";
			}
			if ($mes == 3) {
			$mes = "Marzo";
			}
			if ($mes == 4) {
			$mes = "Abril";
			}
			if ($mes == 5) {
			$mes = "Mayo";
			}
			if ($mes == 6) {
			$mes = "Junio";
			}
			if ($mes == 7) {
			$mes = "Julio";
			}
			if ($mes == 8) {
			$mes = "Agosto";
			}
			if ($mes == 9) {
			$mes = "Septiembre";
			}
			if ($mes == 10) {
			$mes = "Octubre";
			}
			if ($mes == 11) {
			$mes = "Noviembre";
			}
			if ($mes == 12) {
			$mes = "Diciembre";
			}
			echo $dia." de ".$mes." de ".$ano;
			?> | <span onclick="document.location.href='Contacto.php'">Contáctenos</span> | <span onclick="document.location.href='Contacto.php'">Dirección</span></div></td>
		<td width="27%"><input id="texto-busqueda" type="text" value="" style="padding-left:30px;font-family:arial; font-size:10px; color:#666666; width:220px; height:26px;border:1px solid #BF7417; background-image:url(Recursos/Imagenes/buscar.png); background-repeat:no-repeat" onclick="$('#enter-en').val('buscador');"/></td>
	  </tr>
	</table>
  </div>

	<div class="box">
       <div class="box-top">
            <div class="corner-top-left png"><div class="corner-top-right png"><div class="tail-top png"></div></div></div>
       </div>

        <div class="tail-left png">
        <div class="tail-right png">
            <div class="box-content">
                <div class="box-padding">
                  <div class="wrapper">
                    <!--==============================CABECERA=======================================-->
                    <div id="cabecera">
                      <div>
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td width="31%" height="200"><div style="margin-top:40px; margin-left:30px;"><img src="Recursos/Imagenes/logo_asfalco_l.png" /></div></td>
                            <td width="69%" height="200"><div id="cuerpo">
                              <div class="coda-slider-wrapper">
                                <div class="coda-slider preload" id="coda-slider-1">
                                  <div class="panel">
                                    <div class="wrapper"><img src="Recursos/Imagenes/camino1.png" alt="" title="" width="656" height="200" /></div>
                                  </div>
                                  <div class="panel">
                                    <div class="wrapper"><img src="Recursos/Imagenes/camino5.png" alt="" title="" width="656" height="200" /></div>
                                  </div>
                                  <div class="panel">
                                    <div class="wrapper"><img src="Recursos/Imagenes/camino6.png" alt="" title="" width="656" height="200" /></div>
                                  </div>
                                  <div class="panel">
                                    <div class="wrapper"><img src="Recursos/Imagenes/camino7.png" alt="" title="" width="656" height="200" /></div>
                                  </div>
                                </div>
                              </div>
                            </div>							
							</td>
                          </tr>
                        </table>
                      </div>
                      <div id="items-menu" style="background-color:#191919;
								  background-image:url(Recursos/Imagenes/fondo_m_s.png);
								  background-repeat:repeat-x;
								  font-family:arial;
								  font-size:11px;
								  font-weight:bold;
								  color:#f0f0f0;
								  height:25px;
								  padding-left:10px;
								  padding-top:10px">
								  <span style="margin-left:5px;color:orange; cursor:hand;cursor:pointer;" onclick="document.location.href='index.php'">Inicio</span>
								  <span style="margin-left:15px;margin-right:15px;color:#f0f0f0;"> | </span>
								  <span style="margin-left:0px; cursor:hand;cursor:pointer;" onclick="document.location.href='Servicios.php'">Servicios</span>
								  <span style="margin-left:15px;margin-right:15px;color:#f0f0f0;"> | </span>
								  <span style="margin-left:0px; cursor:hand;cursor:pointer;" onclick="document.location.href='Trabajos.php'">Trabajos Realizados</span>
								  <span style="margin-left:15px;margin-right:15px;color:#f0f0f0;"> | </span>
								  <span style="margin-left:0px; cursor:hand;cursor:pointer;" onclick="document.location.href='Valores.php'">Valores y Principios</span>
								  <span style="margin-left:15px;margin-right:15px;color:#f0f0f0;"> | </span>
								  <span style="margin-left:0px; cursor:hand;cursor:pointer;" onclick="document.location.href='Contacto.php'">Contacto</span>
					</div>
                    </div>
                  </div>
                  <!--==============================FIN CABECERA====================================-->
                  <!--==============================INICIO CONTENIDO================================-->
					<div id="contenido">
						<table width="100%" border="0" cellspacing="0" cellpadding="0">
						  <tr>
							<td width="9%" rowspan="2">&nbsp;</td>
							<td width="91%"><div style="padding-top:30px">
						      <h3>Bienvenidos</h3>
						    </div></td>
						  </tr>
						  <tr>
							<td>
							<div class="border-bot img-indent-bot" style="text-align:justify;border:0px solid #fff;">
								<div class="wrapper indent-bot2">
									<div class="extra-box">
									<div class="padding-top" style="text-align:justify; margin-right:80px;border:0px solid #fff;">
										<h6>SOCIEDAD DE INGENIER&Iacute;A Y CONSTRUCCI&Oacute;N ASFALCO S.A.</h6>    	
										<p>Integrada por profesionales con una vasta experiencia en el negocio de la construcci&oacute;n  de Obras Civiles.  ASFALCO es una sociedad de ingenier&iacute;a competitiva y preparada para asumir  los diferentes desaf&iacute;os y exigencias de nuestros clientes. Lo anterior permite posicionarnos en el mercado local como una empresa altamente eficiente en cumplir las metas planificadas.<br /><br />
  										   ASFALCO maneja una estructura organizacional transversal, lo cual se traduce tanto en la cercan&iacute;a de su personal, como en la integridad y seguridad de los mismos, lo que redunda positivamente en el resultado de los servicios prestados.</p>

										<p>GARANTÍA DE CALIDAD: Nuestra empresa busca implementar un sistema de trabajo basado en los más altos estándares de calidad en la construcción de sus obras, apoyado principalmente en nuestra visión de trabajo avalada por la experiencia de sus socios, junto a la minuciosa selección del personal idóneo para enfrentar cada proyecto.
										<p>Nuestro método de trabajo, nos permite cumplir con cada uno de los objetivos propuestos, basándose en cuatro postulados:</p>
										
										</p>
										<div style="margin-left:0px; margin-bottom:10px;"><img src="Recursos/Imagenes/pie.png" alt="Asfalco " width="604" height="223" longdesc="Asfalco, cumplimiento, capacidad y calidad" /></div>
									</div>
									</div>
								</div>
							  </div>							
							</td>
						  </tr>
						  <tr>
						    <td height="20" colspan="2"></td>
						  </tr>
						</table>
				  </div>
						
					<!--==============================FIN CONTENIDO================================-->

              </div>
          </div>
            </div>
        </div>
        </div>
        <div class="box-bot">
            <div class="corner-bot-left png">
			<div class="corner-bot-right png">
			<div class="tail-bot png"></div>
			</div>
			</div>
        </div>
    </div>
	<div style="text-align:center; margin-top:10px; margin-bottom:30px; font-family:Arial, Helvetica, sans-serif; font-size:11px; color:#e5e5e5"><span style="color:#ff5400">&copy;  ASFALCO</span> - Rio Clarillo 9614 Parque Industrial ENEA, Pudahuel, Santiago, Chile - Fono/Fax : (02) 984 4000 - E-mail: contacto@asfalco.cl</div>
   <!--==============================CONTENEDORES PARA JQUERY================================-->
    <div id="mensaje" title="Mensaje">
        <div style="margin:5px 5px 5px 5px; text-align:center" id="mensaje-texto" ></div>
    </div>
    <div id="dialogo-resultado-busqueda" title="Resultado">
        <div style="margin:5px 5px 5px 5px; text-align:center" id="dialogo-resultado-busqueda-contenido" ></div>
    </div>
    <!--==============================CAMPOS AUXILIARES================================-->
	<input type="hidden" id="enter-en" name="enter-en" />
</div>
</body>
</html>

