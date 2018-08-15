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
<body>
<style >
  a i{
    text-decoration: none;
  }
  .fa-pencil {

color:  #FFC107;
font-size: 25px;  }


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
<div class="nav-side-menu">
    <div class="brand">
        <center>
      <h6><b> Bienvenido </b></h6>
      <img src="Imagenes/Profesores/<?php echo $_SESSION['profesor']['imagen'] ; ?>" class="rounded-circle" width="80" height="80"> 
      <h6 style="font-size: 14px;"><strong><?php echo $_SESSION['profesor']['nombre']; ?> </strong> </h6>
       <a class="btn btn-danger" href="salir.php" role="button">Logout</a>
       <br>
      </center>
    </div>
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
  
        <div class="menu-list">
  
            <ul id="menu-content" class="menu-content collapse out">
               

                <li  data-toggle="collapse" data-target="#parametros" class="collapsed active">
                  <a href="#"><i class="fa fa-th-list fa-lg"></i> Parámetros <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu  " id="parametros">
                    <li class="active"><a href="vistas/seccion.php">Sección</a></li>
                    <li><a href="vistas/anioLectivo.php">Año Lectivo</a></li>

                    <li><a href="vistas/sistCalif.php">Sist. Calificación</a></li>
                    <li><a href="vistas/Periodo.php">Periodos</a></li>
                    <li><a href="vistas/Parcial.php">Parciales</a></li>
                     <li><a href="vistas/Examen.php">Examen</a></li>
                    
                </ul>

            
                <li data-toggle="collapse" data-target="#service" class="collapsed">
                  <a href="#"><i class="fa fa-edit fa-lg"></i> Registros <span class="arrow"></span></a>
                </li>  
                <ul class="sub-menu collapse" id="service">
                  
                  <li><a href="vistas/curso.php">Cursos</a></li>
                  <li><a href="vistas/Tutor.php">Tutores</a></li>
                  <li><a href="vistas/profesor.php">Docentes</a></li>
                  <li><a href="vistas/materia.php">Asignaturas</a></li>
                  <li><a href="vistas/Usuarios.php">Usuarios</a></li>
                  
                </ul>
                <li data-toggle="collapse" data-target="#datos" class="collapsed">
                  <a href="#"><i class="fa fa-address-book fa-lg"></i> Datos del Alumno<span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="datos">
                   <li><a href="vistas/Alumno.php">Alumno</a></li>
                   <li><a href="vistas/DatosFamiliares.php">Datos Familiares</a></li>
                   <li><a href="vistas/AlumnoCurso.php">Asignar Curso</a></li>
                   
               </ul>

                <li data-toggle="collapse" data-target="#new" class="collapsed">
                  <a href="#"><i class="fa fa-user fa-lg"></i> Pensum Académico <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="new">
                   <li><a href="vistas/pensumacademico.php">Crer Pensum Académico</a></li>
                   <li><a href="vistas/pensumacademicodetalle.php">Detalle Pensum Académico</a></li>
               </ul>
             </ul>
     </div>
</div> </div>
<div class="col-sm-12 col-md-6 col-lg-9">
<h1> Sistema Académico Young Living </h1>
<hr>
<?php 
  $sql="SELECT count(usuario) as numero from usuarios";
  $resul=mysqli_query($conexion,$sql);
  while($mostrar=mysqli_fetch_row($resul))
  {

?>
<div class="row">
  <div class="col-sm-6 col-md-6 col-lg-3" style="margin-bottom: 10px;">
    <div class="card text-white bg-primary">
    <div class="card-header text-center"><h6>Usuarios</h6></div>
      <div class="card-body">
        <div class="row">
        <div class="col-lg-12"><center><i class="fa fa-user" style="font-size: 70px;"></i></center>
        </div>
      </div>
        <div class="row">
        <div class="col-md-12 col-lg-12"> <center><p class="card-text text-center"><span class="badge badge-pill  badge-secondary"><?php echo $mostrar[0]; }?></span> <br> Registrados</p></center></div> </div>
        </div>
        
      </div>
    
  </div>
  <?php 
  $sql="SELECT count(nombre_Alumno) as numero from alumno";
  $resul=mysqli_query($conexion,$sql);
  while($mostrar=mysqli_fetch_row($resul))
  {
?>
 <div class="col-sm-6 col-md-6 col-lg-3">
    <div class="card text-white bg-success">
    <div class="card-header text-center"><h6>Alumnos</h6></div>
      <div class="card-body">
        <div class="row">
        <div class="col-md-12 col-lg-12 img-fluid"><center><i class="fa fa-users" style="font-size: 70px;"></i></center></div>
      </div>
      <div class="row">
        <div class="col-md-12 col-lg-12"><center><p class="card-text text-center"><span class="badge badge-pill  badge-secondary"><?php echo $mostrar[0]; }?></span> <br> Registrados</p></center></div>
        </div>

        
      </div>
    </div>
  </div>
    <?php 
  $sql="SELECT count(nombre_profesor) as numero from profesor";
  $resul=mysqli_query($conexion,$sql);
  while($mostrar=mysqli_fetch_row($resul))
  {
?>
 <div class="col-sm-6 col-md-6 col-lg-3">
    <div class="card text-white bg-warning">
    <div class="card-header text-center"><h6>Profesores</h6></div>
        <div class="card-body">
        <div class="row">
        <div class="col-md-12 col-lg-12 img-fluid"><center><i class="fa fa-users" style="font-size: 70px;"></i></center></div>
      </div>
      <div class="row">
        <div class="col-md-12 col-lg-12"><center><p class="card-text text-center"><span class="badge badge-pill  badge-secondary"><?php echo $mostrar[0]; }?></span> <br> Registrados</p></center></div>
        </div>

        
      </div>
    </div>
  </div>
    <?php 
  $sql="SELECT count(nombre_materia) as numero from materia";
  $resul=mysqli_query($conexion,$sql);
  while($mostrar=mysqli_fetch_row($resul))
  {
?>
 <div class="col-sm-6 col-md-6 col-lg-3">
    <div class="card text-white bg-info">
    <div class="card-header text-center"><h6>Asignatura</h5></div>
       <div class="card-body">
        <div class="row">
        <div class="col-md-12 col-lg-12 img-fluid"><center><i class="fa fa-users" style="font-size: 70px;"></i></center></div>
      </div>
      <div class="row">
        <div class="col-md-12 col-lg-12"><center><p class="card-text text-center"><span class="badge badge-pill  badge-secondary"><?php echo $mostrar[0]; }?></span> <br> Registrados</p></center></div>
        </div>

        
      </div>
    </div>
  
  </div>

</div>
  <div class="row">
    <div class="col-lg-2"></div>
    <div class="col-lg-8">
      <h4 style="color: blue;"> Parciales </h4>
      <div id="tabladatatable"></div>

        <!-- Modal -->
    <div class="modal fade" id="modalEditar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Actualizar datos </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body ">
          <form id="frmnuevo2">
          <div class="row">
          
          <div class="col-md-6">
          <label>Parcial</label>
            <input type="text" class="form-control" id="parcial2" name="parcial2">
            <input type="hidden" class="form-control" id="id" name="id">
          </div>
          </div>
            <div class="form-row">
              <div class="form-group col-md-4">
              <label for="inputAddress2">Periodo</label>
              <select  id="periodo2" class="form-control form-control-sm" name="periodo2"  >
              <option value="A"> Seleccione... </option>
            <?php
                $sql="SELECT codigo_periodo, periodo from periodos where estado=1"; 
              $result=mysqli_query($conexion,$sql);
              while($mostrar=mysqli_fetch_row($result)){
              ?> 
              <option value="<?php echo $mostrar[0];?>"><?php echo $mostrar[1]; ?> </option>
              <?php
              }
              ?>
              </select>
            </div>
            </div>
          <div class="row">
          <div class="col-md-6">
          <label>Estado</label>
            <select  id="estado2" class="form-control form-control-sm" name="estado2"  >
              <option value="A"> Seleccione ... </option>
              <option value="1">Activo</option>
              <option value="0"> Inactivo</option>
            </select>
          </div>
          
          </div>
          

          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-warning" id="btnActualizar">Actualizar</button>
        </div>
      </div>
    </div>
  </div>

  </div>
</div>

 
<script type="text/javascript">
    $(document).ready(function(){
       $('#tabladatatable').load("vistas/ParcialesPeriodos/tablaParcial.php");
      $('#btnActualizar').click(function(){

        datos=$('#frmnuevo2').serialize();
        $.ajax({
          type:"POST",
          data:datos,
          url:"procesos/ParcialesPeriodos/actualizaparcial.php",
          success:function(r){
           
            if(r==1){
              $('#modalEditar').modal('hide');
              $('#tabladatatable').load("vistas/ParcialesPeriodos/tablaParcial.php");
              alertify.success("Actualizado con exito :)");
            }else{
              alertify.error("no se pudo actualizar :(");
            }
          }
        });
      });
    });
  </script>
  <script type="text/javascript">
    function agregaFrmActualizar(id){
    $.ajax({
      type:"POST",
      data:"id=" + id,
      url:"procesos/ParcialesPeriodos/obtenDatosparcial.php",
      success:function(r){
        
        datos=jQuery.parseJSON(r);
        $('#parcial2').val(datos['parcial']);
        $('#periodo2').val(datos['periodo']);
        $('#estado2').val(datos['estado']);
        $('#id').val(datos['id']);
        
      }
    });
  }
  
  </script>

  
</body>