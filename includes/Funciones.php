<?php

function consultarCampo($campo,$tbl,$filtro,$msjError){
	$query = "SELECT {$campo} FROM {$tbl} {$filtro}";
	$sql = mysql_query($query) or die ("{$msjError} ".mysql_error());
	$row = mysql_fetch_array($sql);
	return $row[$campo];
	}
function consultarCampos($tbl,$filtro,$msjError){
	$query="SELECT * FROM {$tbl} {$filtro}";
	$sql = mysql_query($query) or die ("{$msjError} ".mysql_error());
	$row = mysql_fetch_array($sql);
	return $row;
	}
	
//INSERTAR REGISTRO
function insertarRegistro($tbl,$campos,$values,$msjError){
	
	$sql="INSERT INTO {$tbl} ({$campos}) VALUES ({$values})";
	
	$query = mysql_query($sql)or die ("{$msjError} ".mysql_error());
	}
	
//MODICIFAR TABLA
function modificar($tbl,$campo,$nuevodato,$filtro,$msjError){
		$res= mysql_query("UPDATE {$tbl} set {$campo}='{$nuevodato}' {$filtro}") or die ("{$msjError}".mysql_error());
	}

function enviarCorreoActivacion($nroDocumento,$nombres,$destinatario,$asunto){

	$destinatario=trim($destinatario);
    $parametro = $nroDocumento."_".md5($nroDocumento);  

	$remitente="notificaciones@copiasgratis.com";

	$cuerpo = '<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title></title>
  <style type="text/css">
    
  #outlook a { padding: 0; }
  .ReadMsgBody { width: 100%; }
  .ExternalClass { width: 100%; }
  .ExternalClass * { line-height:100%; }
	body { margin: 0; padding: 0; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; }
	table, td { border-collapse:collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; }
  img { border: 0; height: auto; line-height: 100%; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; }
  p {
    display: block;
    margin: 13px 0;
  }

  </style>
  <!--[if !mso]><!-->
  <style type="text/css">
    @import url(https://fonts.googleapis.com/css?family=Ubuntu:400,500,700,300);
  </style>
  <style type="text/css">
    @media only screen and (max-width:480px) {
      @-ms-viewport { width:320px; }
      @viewport { width:320px; }
    }
  </style>
  <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,500,700,300" rel="stylesheet" type="text/css">
  <!--<![endif]-->
<style type="text/css">
    @media only screen and (min-width:480px) {
    .mj-column-per-100, * [aria-labelledby="mj-column-per-100"] { width:100%!important; }
.mj-column-per-50, * [aria-labelledby="mj-column-per-50"] { width:50%!important; }
.mj-column-px-66, * [aria-labelledby="mj-column-px-66"] { width:66px!important; }
.mj-column-px-33, * [aria-labelledby="mj-column-px-33"] { width:33px!important; }
}</style></head>
<body id="YIELD_MJML" style="background: #ffffff;"><div class="mj-body" style="background-color:#ffffff;font-size:13px;"><!--[if mso]>
  		<table border="0" cellpadding="0" cellspacing="0" width="600" align="center" style="width:600px;"><tr><td>
  		<![endif]--><table cellpadding="0" cellspacing="0" data-width="600" style="width:100%;font-size:0px;"><tbody><tr><td><div style="margin:0 auto;max-width:600px;"><table class="" cellpadding="0" cellspacing="0" style="width:100%;font-size:0px;" align="center"><tbody><tr><td style="text-align:center;vertical-align:top;font-size:0;padding:20px 0;padding-top:20px;padding-bottom:20px;"><!--[if mso]>
      
      <![endif]--></td></tr></tbody></table></div></td></tr></tbody></table><!--[if mso]>
      </td></tr></table>
  		<![endif]-->
  		<!--[if mso]>
  		<table border="0" cellpadding="0" cellspacing="0" width="600" align="center" style="width:600px;"><tr><td>
  		<![endif]--><table cellpadding="0" cellspacing="0" data-width="600" style="background:#ffffff;width:100%;font-size:0px;"><tbody><tr><td><div style="margin:0 auto;max-width:600px;"><table class="" cellpadding="0" cellspacing="0" style="width:100%;font-size:0px;" align="center"><tbody><tr><td style="text-align:center;vertical-align:top;font-size:0;padding:20px 0;padding-top:0px;padding-bottom:0px;"><!--[if mso]>
      
      <![endif]--></td></tr></tbody></table></div></td></tr></tbody></table><!--[if mso]>
      </td></tr></table>
  		<![endif]-->
  		<!--[if mso]>
  		<table border="0" cellpadding="0" cellspacing="0" width="600" align="center" style="width:600px;"><tr><td>
  		<![endif]--><table cellpadding="0" cellspacing="0" data-width="600" style="background:#009FE3;width:100%;font-size:0px;"><tbody><tr><td><div style="margin:0 auto;max-width:600px;"><table class="" cellpadding="0" cellspacing="0" style="width:100%;font-size:0px;" align="center"><tbody><tr><td style="text-align:center;vertical-align:top;font-size:0;padding:20px 0;padding-top:0px;padding-bottom:0px;"><!--[if mso]>
      <table border="0" cellpadding="0" cellspacing="0"><tr><td style="width:300px;">
      <![endif]--><div style="vertical-align:top;display:inline-block;font-size:13px;text-align:left;width:100%;min-width:50%;" class="mj-column-per-50" aria-labelledby="mj-column-per-50"><table width="100%"><tbody><tr><td style="font-size:0;padding:10px 25px;padding-top:0px;padding-bottom:0px;padding-right:0px;padding-left:0px;" align="center"><table cellpadding="0" cellspacing="0" style="border-collapse:collapse;border-spacing:0px;" align="center"><tbody><tr><td><img alt="" src="http://copiasgratis.com/images/logo2.png" style="border:none;display:block;outline:none;text-decoration:none;width:100%;max-width:300px;height:auto;" width="300" height="auto"></td></tr></tbody></table></td></tr></tbody></table></div><!--[if mso]>
      </td><td style="width:300px;">
      <![endif]--><div style="vertical-align:top;display:inline-block;font-size:13px;text-align:left;width:100%;min-width:50%;" class="mj-column-per-50" aria-labelledby="mj-column-per-50"><table width="100%"><tbody><tr><td style="font-size:0;padding:10px 25px;padding-top:50px;padding-bottom:30px;padding-right:25px;padding-left:25px;" align="left"><div class="mj-content" style="cursor:auto;color:#000000;font-family:Ubuntu, Helvetica, Arial, sans-serif;font-size:13px;line-height:22px;"><p><strong style="font-family: Arial; font-size: 14.666666666666666px; white-space: pre-wrap;"><span style="color: rgb(255, 255, 255);"><span style="font-size: 45px;"><span style="font-family: \'Open Sans\', Helvetica, Arial, sans-serif;">Visita</span></span></span></strong></p><p><span style="font-size:14.666666666666666px;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;"><strong><span style="color: rgb(255, 255, 255);"><span style="font-size: 45px;"><span style="font-family: \'Open Sans\', Helvetica, Arial, sans-serif;">soypayanes.com</span></span></span></strong></span></p></div></td></tr></tbody></table></div><!--[if mso]>
      </td></tr></table>
      <![endif]--></td></tr></tbody></table></div></td></tr></tbody></table><!--[if mso]>
      </td></tr></table>
  		<![endif]-->
  		<!--[if mso]>
  		<table border="0" cellpadding="0" cellspacing="0" width="600" align="center" style="width:600px;"><tr><td>
  		<![endif]--><table cellpadding="0" cellspacing="0" data-width="600" style="background:#009fe3;width:100%;font-size:0px;"><tbody><tr><td><div style="margin:0 auto;max-width:600px;"><table class="" cellpadding="0" cellspacing="0" style="width:100%;font-size:0px;" align="center"><tbody><tr><td style="text-align:center;vertical-align:middle;font-size:0;padding:20px 0;padding-top:20px;padding-bottom:20px;"><!--[if mso]>
      <table border="0" cellpadding="0" cellspacing="0"><tr><td style="width:600px;">
      <![endif]--><div style="vertical-align:middle;display:inline-block;font-size:13px;text-align:left;width:100%;min-width:100%;" class="mj-column-per-100" aria-labelledby="mj-column-per-100"><table width="100%"><tbody><tr><td style="font-size:0;padding:10px 25px;padding-top:0px;padding-bottom:0px;padding-right:25px;padding-left:25px;" align="left"><div class="mj-content" style="cursor:auto;color:#000000;font-family:Ubuntu, Helvetica, Arial, sans-serif;font-size:13px;line-height:22px;"><p style="font-weight: 400; line-height: 30px; margin: 13px 0px;"><span style="color: rgb(255, 237, 0);"><span style="font-size: 25px;">Apreciado '.$nombres.'</span></span></p><p style="font-weight: 400; line-height: 30px; margin: 13px 0px;"><span style="color: rgb(255, 255, 255);"><span style="font-size: 25px;">Bienvenido a CopiasGratis</span></span></p></div></td></tr><tr><td style="font-size:0;padding:10px 25px;padding-top:0px;padding-bottom:0px;padding-right:25px;padding-left:25px;" align="left"><div class="mj-content" style="cursor:auto;color:#000000;font-family:Ubuntu, Helvetica, Arial, sans-serif;font-size:13px;line-height:22px;"><p></p><p style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="font-family: Arial; font-size: 14.666666666666666px; white-space: pre-wrap; background-color: transparent;"><span style="color: rgb(255, 255, 255);">Copias Gratis es un innovador sistema para realizar publicidad segmentada a los estudiantes universitarios.</span></span></p><br><p style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="font-size:14.666666666666666px;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;"><span style="color: rgb(255, 255, 255);">La empresa ofrece fotocopias gratuitas por una sola cara sin ningún costo. El sistema es posible ya que el estudiante obtendrá por un lado su material de estudio fotocopiado, y por la otra cara una atractiva pauta publicitaria.

Te invitamos a activar tu cuenta para que puedas gozar de los beneficios que te ofrecemos dando click en el boton "Activar cuenta".</span></span></p><p>
      <br></p></div></td></tr><tr><td style="font-size:0;padding:15px 30px;padding-top:10px;padding-bottom:10px;padding-right:25px;padding-left:25px;" align="left"><table cellpadding="0" cellspacing="0" style="background-color:transparent;border:none;border-radius:8px;" align="left"><tbody><tr><td style="background:#ffffff;border-radius:8px;color:#FFFFFF;cursor:auto;" align="center" valign="middle" bgcolor="#ffffff"><a class="mj-content" href="http://copiasgratis.com/check.php?user='.$parametro.'" style="display:inline-block;text-decoration:none;background:#ffffff;border:1px solid #ffffff;border-radius:8px;color:#FFFFFF;font-family:Ubuntu, Helvetica, Arial, sans-serif;font-size:13px;font-weight:bold;padding:15px 30px;" target="_blank"><span style="font-family: \'Open Sans\', Helvetica, Arial, sans-serif;"><strong><span style="color: rgb(0, 159, 227);"><span style="font-size: 21px;">Activar Cuenta</span></span></strong></span></a></td></tr></tbody></table></td></tr><tr><td style="font-size:0;padding:10px 25px;padding-top:0px;padding-bottom:0px;padding-right:25px;padding-left:25px;" align="left"><div class="mj-content" style="cursor:auto;color:#000000;font-family:Ubuntu, Helvetica, Arial, sans-serif;font-size:13px;line-height:22px;"><p></p><p style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="color: rgb(255, 255, 255); font-family: Arial; font-size: 14.666666666666666px; white-space: pre-wrap; background-color: transparent;">Gracias, El equipo de copiasgratis.com</span></p><p style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="font-size:14.666666666666666px;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;"><span style="color: rgb(255, 255, 255);">Este es un producto desarrollado por:</span></span></p><p></p></div></td></tr></tbody></table></div><!--[if mso]>
      <br><br></p></div></td></tr><tr><td style="font-size:0;padding:15px 30px;padding-top:10px;padding-bottom:10px;padding-right:25px;padding-left:25px;" align="left"><table cellpadding="0" cellspacing="0" style="background-color:transparent;border:none;border-radius:8px;" align="left"><tbody><tr><td style="background:#ffffff;border-radius:8px;color:#FFFFFF;cursor:auto;" align="center" valign="middle" bgcolor="#ffffff"><a class="mj-content" href="http://copiasgratis.com/check.php?user='.$parametro.'" style="display:inline-block;text-decoration:none;background:#ffffff;border:1px solid #ffffff;border-radius:8px;color:#FFFFFF;font-family:Ubuntu, Helvetica, Arial, sans-serif;font-size:13px;font-weight:bold;padding:15px 30px;" target="_blank"><span style="font-family: \'Open Sans\', Helvetica, Arial, sans-serif;"><strong><span style="color: rgb(0, 159, 227);"><span style="font-size: 21px;">Activar Cuenta</span></span></strong></span></a></td></tr></tbody></table></td></tr><tr><td style="font-size:0;padding:10px 25px;padding-top:0px;padding-bottom:0px;padding-right:25px;padding-left:25px;" align="left"><div class="mj-content" style="cursor:auto;color:#000000;font-family:Ubuntu, Helvetica, Arial, sans-serif;font-size:13px;line-height:22px;"><p></p><p style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="color: rgb(255, 255, 255); font-family: Arial; font-size: 14.666666666666666px; white-space: pre-wrap; background-color: transparent;"></span></p><p style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="font-size:14.666666666666666px;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;"><span style="color: rgb(255, 255, 255);">Este es un producto desarrollado por:</span></span></p><p></p></div></td></tr></tbody></table></div><!--[if mso]>
      </td></tr></table>
      <![endif]--></td></tr></tbody></table></div></td></tr></tbody></table><!--[if mso]>
      </td></tr></table>
  		<![endif]-->
  		<!--[if mso]>
  		<table border="0" cellpadding="0" cellspacing="0" width="600" align="center" style="width:600px;"><tr><td>
  		<![endif]--><table cellpadding="0" cellspacing="0" data-width="600" style="width:100%;font-size:0px;"><tbody><tr><td><div style="margin:0 auto;max-width:600px;"><table class="" cellpadding="0" cellspacing="0" style="width:100%;font-size:0px;" align="center"><tbody><tr><td style="text-align:center;vertical-align:top;font-size:0;padding:20px 0;padding-top:20px;padding-bottom:20px;"><!--[if mso]>
      
  		<![endif]-->
  		<table border="0" cellpadding="0" cellspacing="0"><tr><td style="width:300px;">
      <![endif]--><div style="vertical-align:top;display:inline-block;font-size:13px;text-align:left;" class="mj-column-per-100" aria-labelledby="mj-column-per-100"><table ><tbody><tr><td style="font-size:0;padding:10px 25px;padding-top:0px;padding-bottom:0px;padding-right:0px;padding-left:0px;" align="center"><table cellpadding="0" cellspacing="0" style="border-collapse:collapse;border-spacing:0px;" align="center"><tbody><tr><td><img alt="" src="http://copiasgratis.com/images/logoEmpresarial.png" style="border:none;display:block;outline:none;text-decoration:none;width:100%;max-width:600px;height:auto;" width="600" height="auto"></td></tr></tbody></table></td></tr></tbody></table></div><!--[if mso]>
      </td></tr></table>
      </div></body>
</html>';
    /*$cuerpo = " 
        <html> 
        <head> 
           <title>Aviso</title> 
        </head> 
        <body> 
            hola <h1>OOO</h1>
        </body> 
        </html> 
    "; */

    //para el env&iacute;o en formato HTML 
    $headers = "MIME-Version: 1.0\r\n"; 
    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

    //direcci&oacute;n del remitente 
    $headers .= "From: Copias Gratis <".$remitente.">\r\n"; 

    //dirección de respuesta, si queremos que sea distinta que la del remitente 
    $headers .= "Reply-To: ".$remitente."\r\n"; 

    mail($destinatario,$asunto,$cuerpo,$headers,"-f ".$remitente); 

}
?>