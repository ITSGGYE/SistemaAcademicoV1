<?php
// Cargamos la librería dompdf que hemos instalado en la carpeta dompdf
require_once '../../librerias/dompdf/autoload.inc.php';
use Dompdf\Dompdf;


$profesor=$_GET['profesor'];
$curso=$_GET['curso'];
$parcial=$_GET['parcial'];
$materia=$_GET['materia'];
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
	


 $html=file_get_contents("http://localhost/SistAcademico/vistas/Calificaciones/reportedenotas.php?profesor=".$profesor."&materia=".$materia."&parcial=".$parcial."&curso=".$curso);


 
// Instanciamos un objeto de la clase DOMPDF.
$pdf = new DOMPDF();
 
// Definimos el tamaño y orientación del papel que queremos.
//$pdf->set_paper("letter", "portrait");
$pdf->set_paper("A4","portrait");
 
// Cargamos el contenido HTML.
$pdf->load_html(($html));
 
// Renderizamos el documento PDF.
$pdf->render();
 
// Enviamos el fichero PDF al navegador.
$pdf->stream('reporteNotas'.$materia.'.pdf',array("Attachment"=>1));




?>