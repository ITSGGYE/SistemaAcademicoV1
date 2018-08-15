<?php  
session_start();  
if(!isset($_SESSION["profesor"]))
{
 header("location:index.php");
 
}
?>  

<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="librerias/bootstrap/bootstrap2.min.css">
<link rel="stylesheet" type="text/css" href="librerias/bootstrap/bootstrapcdn.css">
<link rel="stylesheet" type="text/css" href="librerias/datatable/dataTables.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="librerias/alertify/css/alertify.css">
<link rel="stylesheet" type="text/css" href="librerias/alertify/css/themes/bootstrap.css">
<link rel="stylesheet" type="text/css" href="librerias/fontawesome/css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="css/estilomenu.css">
<script src="librerias/jquery.min.js"></script>
<script src="librerias/bootstrap/popper.min.js"></script>
<script src="librerias/bootstrap/bootstrap.min.js"></script>
<script src="librerias/datatable/jquery.dataTables.min.js"></script>
<script src="librerias/datatable/dataTables.bootstrap4.min.js"></script>
<script src="librerias/alertify/alertify.js"></script>
<script src="ayuda/validaciones.js"></script>
<?php 
?>
<body >
<style >
  a i{
    text-decoration: none;
  }

</style>
<?php require_once "clases/conexion.php"; 
    $c= new conectar();
    $conexion=$c->conexion();

    
    ?>


<!-- Main -->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container-fluid">
<div class="row">
<div class=" col-sm-12 col-md-6 col-lg-3">

<?php require_once 'sidernav2.php'; ?>
    
<div class="col-lg-9 ">
  <div  >
 
     
<center>
    <img src="Imagenes/logo/logo.png" class="img-fluid" height="300" width="300"> </center>
    <br>
    <h3 class="display-6 text-center" style="color: green; font-weight: bold">Sistema Académico Ingreso de Notas</h3>
    <br>
  
  
</div>


<h4 style="color: green; font-weight: bold"> Mis Curso </h4>
<hr>
<?php 
$id_profesor=$_SESSION['profesor']['id'];

$sql="SELECT fk_curso from tutor where fk_profesor='$id_profesor'";
$result=mysqli_query($conexion,$sql);
while($mostrar=mysqli_fetch_row($result)){
$curso=$mostrar[0];
}
$sql="SELECT codigo_periodo from periodos where estado=1";
$result=mysqli_query($conexion,$sql);
while($mostrar=mysqli_fetch_row($result)){
$periodo=$mostrar[0];
}

?>
<div class="table-responsive">
  <h4> LISTADO DE AlUMNOS </h4>
  <table class="table table-sm table-bordered" >
    <thead>
      <th>Matricula </th>
      <th>Estudiante</th>
      <th align="center">Ver notas</th>
      <th align="center">Ingresar notas</th>
      <th align="center">Modificar notas</th>
      <th align="center">Reporte</th>
      
    </thead>

<?php
$sql="SELECT a.id_alumno , a.nombre_alumno, c.fk_anio from alumno a , curso_alumno c  where c.fk_alumno=a.id_alumno and c.fk_curso='$curso' and c.estado='A' ";
$result=mysqli_query($conexion,$sql);
while($mostrar=mysqli_fetch_row($result)){
?>
<tr>
  <td><?php echo $mostrar[0]; ?></td>
  <td><?php echo $mostrar[1]; ?></td>
  <td> <a href="vistas/ver_notas_preparatoria.php?alumno=<?php echo $mostrar[0]?>&periodo=<?php echo $periodo ?>&curso=<?php echo $curso?>&anio=<?php echo $mostrar[2] ?>" class="btn btn-primary btn-sm">
             Ver  <span class="glyphicon glyphicon-list-alt"></span>
            </a></td>
  <td> <a href="vistas/ingresar_notas_primero.php?alumno=<?php echo $mostrar[0]?>&periodo=<?php echo $periodo ?>&curso=<?php echo $curso?>&anio=<?php echo $mostrar[2] ?>" class="btn btn-primary btn-sm">
              Calificar  <span class="glyphicon glyphicon-list-alt"></span>
            </a></td>
  <td> <a href="vistas/update_notas_preparatoria.php?alumno=<?php echo $mostrar[0]?>&periodo=<?php echo $periodo ?>&curso=<?php echo $curso?>&anio=<?php echo $mostrar[2] ?>" class="btn btn-warning btn-sm">
              Update <span class="glyphicon glyphicon-list-alt"></span>
            </a></td>
  <td> <a href="procesos/Calificaciones/reporte_notas_preparatoria.php?alumno=<?php echo $mostrar[0]?>&periodo=<?php echo $periodo ?>&curso=<?php echo $curso?>&anio=<?php echo $mostrar[2] ?>&profesor=<?php echo $id_profesor?>" class="btn btn-danger btn-sm">
             PDF  <span class="glyphicon glyphicon-list-alt"></span>
            </a></td>
</tr>


<?php
}
?>
</table>
</div>
  

</div>
</div>
</body>