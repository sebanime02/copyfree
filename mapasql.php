<?php
include("includes/Cabecera.php");

$query = "SELECT * FROM establecimiento";
$resultado = mysql_query($query);
$row = mysql_fetch_assoc($resultado);
 
 
header("Content-Type: text/xml;charset=iso-8859-1");
echo '<?xml version="1.0" encoding="UTF-8"?>';
echo '<markers xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
do{
echo'<marker id="'.$row["ID_ESTABLECIMIENTO"].'" lat="'.$row["LATITUD"].'" lng="'.$row["LONGITUD"].'" title="'.$row["NOMBRE_ESTABLECIMIENTO"].'" content="'.$row["DIRECCION_ESTABLECIMIENTO"].'" />';
}while($row=mysql_fetch_assoc($resultado));
echo '</markers>';
 
?>