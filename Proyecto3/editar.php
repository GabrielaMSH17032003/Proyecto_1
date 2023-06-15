<?php 
include("basedd.php"); 

if(isset( $_GET['txtID'] )){ 
        $txtID=(isset($_GET['txtID']))?$_GET['txtID']:"";

        $sentencia=$conexion->prepare("SELECT * FROM tusuarios WHERE id=:id");
        $sentencia->bindParam(":id",$txtID);
        $sentencia->execute();
        
        $registro=$sentencia->fetch(PDO::FETCH_LAZY);
        
        $usuario=$registro["usuario"]; 
        $contraseña=$registro["contraseña"]; 
        $correo=$registro["correo"];
        
        }
?>

<?php include("templates/header.php"); ?>
<?php 
include("basedd.php"); 
?>

<head>

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style_tienda.css">
    <link rel="stylesheet" href="styles/footer.css">

</head>

  <style>
   
    .card {
        margin-top: 100px;
        left: 150;
    }
    th {
        color: #1d1d1b; 
    }
    label {
        color: rgba(0, 0, 0, 0.5); 
    }
  </style>

<div class="card">
    <div class="card-header">
        Datos Usuarios
    </div>
    <div class="card-body">

    <form action="" method="post" enctype="multipart/form-data">

    <div class="mb-3">
        <label for="txtID" class="form-label">ID; </label>
        <input type="txt"
        value ="<?php echo $txtID;?>"
        class= "form-control" readonly name="txtID" id="txtID" aria-describedby="helpID">
    
    </div>

<div class="mb-3">
    <label for="usuario" class="form-label">Nombre del usuario: </label>
    <input type="text"
    value ="<?php echo $usuario;?>"
    class="form-control" name="usuario" id="usuario" aria-describedby="helpID" placeholder="Nombre del usuario">
</div>



<div class="mb-3">
  <label for="contraseña" class="form-label">Contraseña</label>
  <input type="contraseña"
  value ="<?php echo $contraseña;?>"
    class="form-control" name="contraseña" id="contraseña" aria-describedby="helpId" placeholder="Escriba su pin">
</div>

<div class="mb-3">
  <label for="correo" class="form-label">Correo: </label>
  <input type="email"
  value ="<?php echo $correo;?>"
    class="form-control" name="correo" id="correo" aria-describedby="helpId" placeholder="Escriba su correo">
</div>

<button type="submit" class="btn btn-success">Agregar</button>
<a name="" id="" class="btn btn-primary" href="index.php" role="button">Cancelar</a>

    </form>

    </div>
    <div class="card-footer text-muted"></div>

</div>


<script src="scripts/script_tienda.js"></script>


