<?php
include 'conexion.php';

    $idcategorias = $_POST['idcategorias'];
    $idmarcas= $_POST['idmarcas'];
    $precio = $_POST['precio'];
    $descripcion= $_POST['descripcion'];
   
  $sql= "INSERT INTO productos(idcategorias,idmarcas,precio,descripcion)
  values ('$idcategorias','$idmarcas','$precio','$descripcion')";
  
  $resultado = mysqli_query ($conn, $sql);
  
  if($resultado === true ){
    header("location:index.php");
  }else{
    echo "datos no insertados";
  }
  ?>