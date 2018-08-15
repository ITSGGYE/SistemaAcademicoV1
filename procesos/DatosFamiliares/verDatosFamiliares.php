   <style type="text/css">
    p{
      font-size: 16px;
      }
    label{
      text-align: center;
      color:black;
      padding: 2px;
    }
    input[type="text"], input[type="date"], input[type="email"], input[type="file"]{
      font-size: 14px;
      text-align: center;
      }
   </style>
<?php 
require_once "../../clases/conexion.php";
require_once "../../vistas/dependencias.php";

$obj= new conectar();
$conexion=$obj->conexion();
/*$conexion = mysqli_connect("localhost", "root", "", "sistemaacademico");*/
$id=$_POST['user_id'];
echo $id;

if(isset($_POST["user_id"]))
{
 $output = '';
 
 $sql="SELECT 
              m.nombre_madre, 
              m.cedula_madre, 
              m.ocupacion_madre, 
              m.instruccion_madre, 
              m.telefono_madre, 
              m.correo_madre,
              m.direccion_madre,
              m.lugartra_madre,
              p.nombre_padre, 
              p.cedula_padre, 
              p.ocupacion_padre, 
              p.instruccion_padre, 
              p.telefono_padre, 
              p.correo_padre,
              p.direccion_padre,
              p.lugartra_padre,
              a.nombre_Alumno,
              a.id_alumno from alumno a inner join datos_madre m  on  a.id_alumno=m.fk_alumno inner join datos_padre  p on p.fk_alumno=a.id_alumno  where
              m.fk_alumno=$id and p.fk_alumno=$id and a.id_alumno='$id'";
             

 $result = mysqli_query($conexion,$sql);

 $output .= '  
      <div class="container" >
      <div class="row">  
      <div class="col-md-12">
      <h6> DATOS DEL ESTUDIANTE </h6>
      </div>
      </div>
                               ';
    while($values=mysqli_fetch_array($result)) 
    {
     $output .= '
         
                                    
                                        
                                       <div class="row">
                                       <h4> Datos Madre</h4>
                                       <div class="col-md-2">
                                        <label>Matricula </label> 
                                        <input type="text" class="form-control form-control-sm" value="'.$values["id_alumno"].'" readonly>
                                       </div>
                                       <div class="col-md-5">
                                        <label> Estudiante </label> 
                                        <input type="text" class="form-control form-control-sm" value="'.$values["nombre_Alumno"].'" readonly>
                                       </div>
                                       <div class="col-md-5">
                                        <label>Nombre de la Madre</label>
                                        <input type="text" class="form-control form-control-sm" value="'.$values["nombre_madre"].'" readonly> 
                                         
                                       </div>
                                        
                                       </div>

                                        <div class="row">
                                        <div class="col-md-3">
                                        <label> Cedula </label> 
                                        <input type="text" class="form-control form-control-sm" value="'.$values["cedula_madre"].'" readonly>
                                       </div>
                                       <div class="col-md-4">
                                       <label> Instruccion </label> 
                                        <input type="text" class="form-control form-control-sm" value="'.$values["instruccion_madre"].'" readonly>
                                        
                                       </div>
                                       <div class="col-md-4">
                                        <label> Ocupación </label> 
                                         <input type="text" class="form-control form-control-sm" value="'.$values["ocupacion_madre"].'" readonly>
                                       </div>
                                       </div>
                                       <div class="row">
                                        <div class="col-md-3">
                                        <label> Telefono </label> 
                                        <input type="text" class="form-control form-control-sm" value="'.$values["telefono_madre"].'" readonly>
                                       </div>
                                       <div class="col-md-3">
                                        <label> Lugar de Trabajo</label> 
                                         <input type="text" class="form-control form-control-sm" value="'.$values["lugartra_madre"].'" readonly>
                                       </div>
                                       <div class="col-md-6">
                                        <label> Direccion</label> 
                                         <input type="text" class="form-control form-control-sm" value="'.$values["direccion_madre"].'" readonly>
                                       </div>
                                       </div>
                                        <div class="row">
                                        <div class="col-md-6">
                                        <label> Correo </label> 
                                        <input type="text" class="form-control form-control-sm" value="'.$values["correo_madre"].'" readonly>
                                       </div>
                                       </div>

                                       <hr>
                                         <div class="row">
                                       <h4> Datos Padre</h4>
                                       
                                       
                                       <div class="col-md-5">
                                        <label>Nombre de la Padre</label>
                                        <input type="text" class="form-control form-control-sm" value="'.$values["nombre_padre"].'" readonly> 
                                         
                                       </div>
                                       <div class="col-md-6">
                                        <label> Direccion</label> 
                                         <input type="text" class="form-control form-control-sm" value="'.$values["direccion_padre"].'" readonly>
                                       </div>
                                        
                                       </div>

                                        <div class="row">
                                        <div class="col-md-3">
                                        <label> Cedula </label> 
                                        <input type="text" class="form-control form-control-sm" value="'.$values["cedula_padre"].'" readonly>
                                       </div>
                                       <div class="col-md-4">
                                       <label> Instruccion </label> 
                                        <input type="text" class="form-control form-control-sm" value="'.$values["instruccion_padre"].'" readonly>
                                        
                                       </div>
                                       <div class="col-md-4">
                                        <label> Ocupación </label> 
                                         <input type="text" class="form-control form-control-sm" value="'.$values["ocupacion_padre"].'" readonly>
                                       </div>
                                       </div>
                                       <div class="row">
                                        <div class="col-md-3">
                                        <label> Telefono </label> 
                                        <input type="text" class="form-control form-control-sm" value="'.$values["telefono_padre"].'" readonly>
                                       </div>
                                       <div class="col-md-3">
                                        <label> Lugar de Trabajo</label> 
                                         <input type="text" class="form-control form-control-sm" value="'.$values["lugartra_padre"].'" readonly>
                                       </div>
                                                                               <div class="col-md-6">
                                        <label> Correo </label> 
                                        <input type="text" class="form-control form-control-sm" value="'.$values["correo_padre"].'" readonly>
                                       </div>
                                       
                                       </div>
                                        
                                      
                                       
                                        
                    ';  
}                                     
                       }