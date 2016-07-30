<?php
	session_start();
?>
<html>
<head>
<meta charset="iso-8859-1">
<title>Estudiantes</title>
</head>

<body>
<?php
	echo $_SESSION['nombres'];
?>
</body>
</html>