<?php 
        include("conexion.php");

        $identificacion=$_POST["identificacion"];
        $nombres=$_POST["nombres"];
        $apellidos=$_POST["apellidos"];
        $direccion=$_POST["direccion"];
       

        $datos_productos= mysqli_query($cnn,"Call guardar_proveedores('$identificacion','$apellidos','$nombres','$direccion',@mensaje)");
        $resultado_productos= mysqli_query($cnn,"select @mensaje as mensaje");

        $respuesta=mysqli_fetch_array($resultado_productos);
        echo  $respuesta["mensaje"];
        /*if($datos_productos)
        {
            echo "DATOS GUARDADOS";
        }*/


?>