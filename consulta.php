<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

   
    <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>

  
    <?php 
        require("conexion.php");  
        $datos_productos= mysqli_query($cnn,"SELECT * FROM vista_productos");
        
         
    ?>

  </head>
  <body>
    <div class="container">

         <table class="table tabled-bordered" id="datos">
         <thead>
            <tr>
                <td>IDPRODUCTO</td>
                <td>NOMBRE</td>
                <td>PRECIO</td>
                <td>CANTIDAD</td>
                <td>FECHA_ELAB</td>
                <td>FECHA_CAD</td>
                <td>CATEGORIA</td>
            </tr>
            </thead>
            <?php 
            while ($fila=mysqli_fetch_assoc($datos_productos))
            {
                echo"<tr>";
                    echo "<td>". $fila["Id"]."</td>";
                    echo "<td>".$fila["nombre_producto"]."</td>";
                    echo "<td>". $fila["precio"]."</td>";
                    echo "<td>".$fila["cantidad"]."</td>";
                    echo "<td>". $fila["fecha_elab"]."</td>";
                    echo "<td>". $fila["fecha_cad"]."</td>";
                    echo "<td>".$fila["categoria"]."</td>";
                echo "</tr>";
            }
            
            
            ?>

    </table>
    <script>
         $(document).ready(function () {
        
            $('#datos').DataTable();
    });
    </script>
  </div>


 
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
  </body>
</html>