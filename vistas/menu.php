<head> 
<meta charset="utf-8">
</head>
<nav class="navbar navbar-expand-lg navbar-dark bg-success fixed-top">
  <a class="navbar-brand" href="#">
    <img src="../Imagenes/logo/logo.png" width="100" height="30" class="d-inline-block align-top" alt=""></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse " id="navbarColor02">
    <ul class="navbar-nav mr-auto">
      

<?php 
  if($_SESSION['profesor']['privilegio']==1)
  {

?>
 <li class="nav-item active">
        <a class="nav-link" href="../index2.php">Inicio <span class="sr-only">(current)</span></a>
  </li>
  <li class="nav-item active">
        <a class="nav-link" href="curso.php">Cursos <span class="sr-only">(current)</span></a>
  </li>
  <li class="nav-item active">
        <a class="nav-link" href="materia.php">Asignaturas <span class="sr-only">(current)</span></a>
  </li>
  <li class="nav-item active">
        <a class="nav-link" href="Usuarios.php">Usuarios <span class="sr-only">(current)</span></a>
  </li>
  <?php 
} else {

  ?>
   <li class="nav-item active">
  <a class="nav-link" href="../inicio.php">Inicio <span class="sr-only">(current)</span></a>
</li>
<li class="nav-item active">
  <a class="nav-link" href="../vernotas.php">Ver notas <span class="sr-only">(current)</span></a>
</li>

  <?php
}?>
      
      <li class="nav-item">
        <a class="nav-link" href="../salir.php"><?php echo $_SESSION['profesor']['nombre'];?></a>
      </li>
    </ul>

  </div>
</nav>

