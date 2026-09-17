<?php
require_once 'vendor/autoload.php';
use PhpOffice\PhpWord\TemplateProcessor;

$template = new TemplateProcessor('anexo3.docx');


$template->setValue('empresa', $_POST['empresa']);
$template->setValue('proyecto', $_POST['proyecto']);
$template->setValue('asesor_externo', $_POST['asesor_externo']);
$template->setValue('nombre_estudiante', $_POST['nombre_estudiante']);
$inicio = date('d/m/Y', strtotime($_POST['inicio']));
$fin = date('d/m/Y', strtotime($_POST['fin']));
$template->setValue('periodo', "$inicio al $fin");
$p_suma = 0;
for ($i = 1; $i <= 10; $i++) {
    $p_suma += (int)$_POST["p_$i"];
}
$template->setValue('p_1',$_POST['p_1']);
$template->setValue('p_2',$_POST['p_2']);
$template->setValue('p_3',$_POST['p_3']);
$template->setValue('p_4',$_POST['p_4']);
$template->setValue('p_5',$_POST['p_5']);
$template->setValue('p_6',$_POST['p_6']);
$template->setValue('p_7',$_POST['p_7']);
$template->setValue('p_8',$_POST['p_8']);
$template->setValue('p_9',$_POST['p_9']);
$template->setValue('p_10',$_POST['p_10']);

$template->setValue('p_suma', $p_suma);


$template->setValue('fecha_hoy', date('d-m-Y'));

$template->setValue('comentarios', $_POST['comentarios']);


header("Content-Description: File Transfer");
header("Content-Disposition: attachment; filename=\"anexo3.docx\"");
header("Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document");
header("Content-Transfer-Encoding: binary");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("Expires: 0");

$template->saveAs("php://output");
exit;
?>