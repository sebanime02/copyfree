<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<title>Copias Gratis</title>
<script language="javascript" type="text/javascript">
  function resizeIframe(obj) {
    obj.style.height = obj.contentWindow.document.body.scrollHeight + 'px';
  }
</script>
</head>

<body>

<?php if (!empty($_GET['par']) && $_GET['par']==1) { ?>
	<iframe width="100%" height="700px" src="RegistrarEstudiante.php" onload="resizeIframe(this)" marginheight="0" marginwidth="0" noresize scrolling="No" frameborder="0" />
<?php
} else {
	?>
<iframe width="100%" height="250px" src="Inicio.php" marginheight="0" onload="resizeIframe(this)" marginwidth="0" noresize scrolling="No" frameborder="0" />

	<?php
}?>
	
</body>
</html>