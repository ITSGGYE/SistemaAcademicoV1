
<?php
// Cargamos la librería dompdf que hemos instalado en la carpeta dompdf
require_once '../../librerias/dompdf/autoload.inc.php';
use Dompdf\Dompdf;


$alumno=$_GET['alumno'];
$curso=$_GET['curso'];
$anio=$_GET['anio'];
$periodo=$_GET['periodo'];
$profesor=$_GET['profesor'];


// Introducimos HTML de prueba
function file_get_contents_curl($url) {
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $url);

    $data = curl_exec($ch);
    curl_close($ch);

    return $data;
}



 $html=file_get_contents("http://localhost/SistAcademico/vistas/Calificaciones/reportedenotaspreparatoria.php?alumno=".$alumno."&anio=".$anio."&curso=".$curso."&periodo=".$periodo."&profesor=".$profesor);


 
// Instanciamos un objeto de la clase DOMPDF.
$pdf = new DOMPDF();
 
// Definimos el tamaño y orientación del papel que queremos.
//$pdf->set_paper("letter", "portrait");
$pdf->set_paper("A4","landscape");
 
// Cargamos el contenido HTML.
$pdf->load_html(($html));
 
// Renderizamos el documento PDF.
$pdf->render();
 
// Enviamos el fichero PDF al navegador.
$pdf->stream('reportedenotaspreparatoria'.$curso.'.pdf',array("Attachment"=>1));




?>