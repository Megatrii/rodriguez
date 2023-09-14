<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/8d8fa95222.js" crossorigin="anonymous"></script>
</head>
<body>
    

<div class="container- fluid row">
<form class="col-4  p-3" method="POST">
    <h3 class="text center text secondary" > Registro de pacientes </h3>
    <?php
        include "modelo/conexion.php";
        include "controlador/registro_persona.php";
    ?>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Ingrese nombre del paciente </label>
    <input type="text" class="form-control" name="nombre">
    
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Ingrese apellido del paciente </label>
    <input type="text" class="form-control" name="apellido">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Ingrese documento de identidad del paciente</label>
    <input type="text" class="form-control" name="documento">
    
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Ingrese email del paciente</label>
    <input type="text" class="form-control" name="email">
    
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Ingrese telefono del paciente </label>
    <input type="text" class="form-control" name="telefono">
    
  </div>
  
  <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">registrar</button>
</form>

<div class="col-8 p-4">
<table class="table">
  <thead class="bg-warning">
    <tr>
      <th scope="col">id</th>
      <th scope="col">nombre</th>
      <th scope="col">apellido</th>
      <th scope="col">email</th>
      <th scope="col">telefono</th>
      <th scope="col">documento</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>

     <?php
     include "modelo/conexion.php";
     $sql=$conexion->query("select * from pacientes");
     while($datos = $sql ->fetch_object()) {?>


    <tr>
      <td><?=$datos->id ?> </td>
      <td><?=$datos->nombre ?> </td>
      <td><?=$datos->apellido ?> </td>
      <td><?=$datos->email ?> </td>
      <td><?=$datos->telefono ?> </td>
      <td><?=$datos->documento ?> </td>
      <td>
            <a href="" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
            <a href="" class="btn btn-small btn-danger" ><i class="fa-solid fa-trash-can"></i></a>
      </td>
    </tr>
   <?php }
   ?>

  </tbody>
</table>


</div>

</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>