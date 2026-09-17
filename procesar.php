<?php
require_once 'vendor/autoload.php';
use PhpOffice\PhpWord\TemplateProcessor;

$template = new TemplateProcessor('anexo.docx');


$template->setValue('empresa', $_POST['empresa']);
$template->setValue('proyecto', $_POST['proyecto']);
$template->setValue('departamento', $_POST['departamento']);

$inicio = date('d/m/Y', strtotime($_POST['inicio']));
$fin = date('d/m/Y', strtotime($_POST['fin']));
$template->setValue('periodo', "$inicio al $fin");



$checked   = "☑";  
$unchecked = "☐";


$template->setValue('p_ind',  isset($_POST['ind'])  ? $checked : $unchecked);
$template->setValue('p_meca', isset($_POST['meca']) ? $checked : $unchecked);
$template->setValue('p_isic', isset($_POST['isic']) ? $checked : $unchecked);
$template->setValue('p_ali',  isset($_POST['ali'])  ? $checked : $unchecked);
$template->setValue('p_ges',  isset($_POST['ges'])  ? $checked : $unchecked);


$template->setValue('objetivo', $_POST['objetivo']);
$template->setValue('resumen', $_POST['resumen']);
$template->setValue('problematica', $_POST['problematica']);
$template->setValue('resultados', $_POST['resultados']);
$template->setValue('producto', $_POST['producto']);


$template->setValue('hombres', $_POST['hombres']);
$template->setValue('mujeres', $_POST['mujeres']);
$template->setValue('indistinto', $_POST['indistinto']);
$template->setValue('area', $_POST['area']);
$template->setValue('conocimientosre', $_POST['conocimientosre']);
$template->setValue('caracteristicas', $_POST['caracteristicas']);


$template->setValue('solicitante', $_POST['solicitante']);
$template->setValue('jefe', $_POST['jefe']);


$desc = $_POST['desc'];
$comp = $_POST['comp'];
$tiempo = $_POST['tiempo'];
$evid = $_POST['evidencias'];

$contador = count($desc);


$template->cloneRow('no', $contador);

for ($i = 0; $i < $contador; $i++) {
    $n = $i + 1;

    $template->setValue("no#$n", $n);
    $template->setValue("desc#$n", $desc[$i]);
    $template->setValue("comp#$n", $comp[$i]);
    $template->setValue("tiempo#$n", $tiempo[$i]);
    $template->setValue("evidencias#$n", $evid[$i]);
}

$template->setValue('nomr', $_POST['nomr']);


header("Content-Description: File Transfer");
header("Content-Disposition: attachment; filename=\"anexo.docx\"");
header("Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document");
header("Content-Transfer-Encoding: binary");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("Expires: 0");

$template->saveAs("php://output");
exit;
?>
