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

    $color=array('bg-primary','bg-secondary','bg-success','bg-danger','bg-warning','bg-info');
    $i=0;
    ?>


<!-- Main -->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container-fluid">
<div class="row">
<div class=" col-sm-12 col-md-6 col-lg-3">

<?php require_once 'sidernav.php'; ?>
    
<div class="col-lg-9 ">
  <div  >
 
     
<center>
    <img src="Imagenes/logo/logo.png" class="img-fluid" height="300" width="300"> </center>
    <br>
    <h3 class="display-6 text-center" style="color: green; font-weight: bold">Sistema Acádemico Ingreso de Notas</h3>
    <br>
  
  
</div>



<h4 style="color: green; font-weight: bold"> Cursos </h4>
<hr>
<div class="row">
<?php 

$sql="SELECT id_examen from examen where estado=1 limit 1";
$result=mysqli_query($conexion,$sql);
while ($mostrar=mysqli_fetch_row($result)) {
  $examen=$mostrar[0];

if($examen!='')
{
$id_profesor=$_SESSION['profesor']['id'];

$sql="SELECT pensum.fk_curso, detalle.fk_profesor, detalle.fk_materia, m.nombre_materia, c.nombre_Curso  from pensum_academico pensum, 
   detalle_pensum_academico detalle, curso c, materia m where pensum.fk_curso = c.id_curso and detalle.fk_materia=m.id_materia and pensum.id_pensum=detalle.fk_pensum and detalle.fk_profesor='$id_profesor' order by c.nombre_Curso";
$result=mysqli_query($conexion,$sql);
while($mostrar=mysqli_fetch_row($result)){



?>

  <div class="col-lg-3">
    <div class="card  text-center  ">
      <div class="card-header"> <b><?php echo $mostrar[4];?></b> </div>
      <div class="card-body ">

        <h6 class="card-title" ><?php echo $mostrar[3];?></h6>
       

        <form method="GET" action="vistas/update_notas_examen.php">
        <input type="hidden" name="curso"  id="curso" value="<?php echo $mostrar[0]; ?>">
        <input type="hidden" name="materia" id="materia" value="<?php echo $mostrar[2]; ?>">
        <input type="hidden" name="examen" id="examen" value="<?php echo $examen; ?>">
        
        
        <input type="submit" name="" class="btn btn-primary" value="Calificar">
        </form>
  
      </div>
    </div>
  </div>
<?php
$i++;
  }


?>
</div>
<?php 
}
 else {
  echo 'no esta disponible aun ';
}
}
?>
</div>
</div>
</body>