<?php 
include("conexion.php");

$nom=$_POST["nombre"];
$precio=$_POST["precio"];
$cantidad=$_POST["cantidad"];
$fecha_elab=$_POST["fecha_elab"];
$fecha_cad=$_POST["fecha_cad"];
$categoria=$_POST["categoria"];

$datos_productos= mysqli_query($cnn,"INSERT INTO productos(nombre_producto,precio,cantidad,fecha_elab,fecha_cad,IdCategoria) 
VALUES ('$nom','$precio','$cantidad','$fecha_elab','$fecha_cad','$categoria')");

if($datos_productos)
{
    echo "DATOS GUARDADOS";
}

?>