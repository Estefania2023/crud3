<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <h1 class="text-center" style= "background-color:black;color:white" >LISTADO DE PRODUCTOS</h1>
    <hr>
    </div>
    <div class="container">
    <table class="table">
    <div class="container">
<a href="formulario.php" class="btn btn-success">Agregar</a>
</div>
  <thead>
                <tr>
                    <th scope="col">Productos</th>
                    <th scope="col">Categorias</th>
                    <th scope="col">Marcas</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Descripcion</th>

                    <th scope="col">Id marcas</th>
                    <th scope="col">Nombre Marcas</th>

                    <th scope="col">Id categorias</th>
                    <th scope="col">Nombre C</th>

                   </tr>
            </thead>
            <tbody>
            <?php
    require 'conexion.php';

    $sql=("SELECT *FROM productos INNER JOIN categorias on productos.idcategorias=categorias.idcategorias INNER JOIN marcas on productos.idmarcas=marcas.idmarcas");
    $resultado= $conn->query($sql);
    ?>
    <?php      
      while ($fila = $resultado->fetch_assoc()) {
        ?>
                <tr>
                    <td scope="row"><?php  echo $fila['idproductos']?></td>
                    <td scope="row"><?php  echo $fila['idcategorias']?></td>
                    <td scope="row"><?php  echo $fila['idmarcas']?></td>
                    <td scope="row"><?php  echo $fila['precio']?></td>
                    <td scope="row"><?php  echo $fila['descripcion']?></td>
                    
                    <td scope="row"><?php  echo $fila['idmarcas']?></td>
                    <td scope="row"><?php  echo $fila['nombremarca']?></td>
                    <td scope="row"><?php  echo $fila['idcategorias']?></td>
                    <td scope="row"><?php  echo $fila['nombrecategoria']?></td>

                    <th>
      <a href=""class="btn btn-warning">Editar </a>
      <a href=""class="btn btn-success">Eliminar</a>
    </th>
                    </td>
                </tr>
                    <?php } ?>
                    </tbody>
                    </table>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script> 
</body>
</html>