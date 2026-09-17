<?php
require_once 'vendor/autoload.php';
use PhpOffice\PhpWord\TemplateProcessor;

$template = new TemplateProcessor('anexo2.docx');


$template->setValue('empresa', $_POST['empresa']);
$template->setValue('proyecto', $_POST['proyecto']);
$template->setValue('asesor_externo', $_POST['asesor_externo']);
$template->setValue('nombre_estudiante', $_POST['nombre_estudiante']);
$inicio = date('d/m/Y', strtotime($_POST['inicio']));
$fin = date('d/m/Y', strtotime($_POST['fin']));
$template->setValue('periodo', "$inicio al $fin");



$checked   = "✓";  
$unchecked = " ";

$template->setValue('ex_1',  isset($_POST['ex_1'])  ? $checked : $unchecked);
$template->setValue('no_1', isset($_POST['no_1']) ? $checked : $unchecked);
$template->setValue('bu_1', isset($_POST['bu_1']) ? $checked : $unchecked);
$template->setValue('su_1',  isset($_POST['su_1'])  ? $checked : $unchecked);
$template->setValue('in_1',  isset($_POST['in_1'])  ? $checked : $unchecked);

$template->setValue('ex_2',  isset($_POST['ex_2'])  ? $checked : $unchecked);
$template->setValue('no_2',  isset($_POST['no_2']) ? $checked : $unchecked);
$template->setValue('bu_2',  isset($_POST['bu_2']) ? $checked : $unchecked);
$template->setValue('su_2',  isset($_POST['su_2'])  ? $checked : $unchecked);
$template->setValue('in_2',  isset($_POST['in_2'])  ? $checked : $unchecked);

$template->setValue('ex_3',  isset($_POST['ex_3'])  ? $checked : $unchecked);
$template->setValue('no_3',  isset($_POST['no_3']) ? $checked : $unchecked);
$template->setValue('bu_3',  isset($_POST['bu_3']) ? $checked : $unchecked);
$template->setValue('su_3',  isset($_POST['su_3'])  ? $checked : $unchecked);
$template->setValue('in_3',  isset($_POST['in_3'])  ? $checked : $unchecked);

$template->setValue('ex_4',  isset($_POST['ex_4'])  ? $checked : $unchecked);
$template->setValue('no_4',  isset($_POST['no_4']) ? $checked : $unchecked);
$template->setValue('bu_4',  isset($_POST['bu_4']) ? $checked : $unchecked);
$template->setValue('su_4',  isset($_POST['su_4'])  ? $checked : $unchecked);
$template->setValue('in_4',  isset($_POST['in_4'])  ? $checked : $unchecked);

$template->setValue('ex_5',  isset($_POST['ex_5'])  ? $checked : $unchecked);
$template->setValue('no_5',  isset($_POST['no_5']) ? $checked : $unchecked);
$template->setValue('bu_5',  isset($_POST['bu_5']) ? $checked : $unchecked);
$template->setValue('su_5',  isset($_POST['su_5'])  ? $checked : $unchecked);
$template->setValue('in_5',  isset($_POST['in_5'])  ? $checked : $unchecked);

$template->setValue('ex_6',  isset($_POST['ex_6'])  ? $checked : $unchecked);
$template->setValue('no_6',  isset($_POST['no_6']) ? $checked : $unchecked);
$template->setValue('bu_6',  isset($_POST['bu_6']) ? $checked : $unchecked);
$template->setValue('su_6',  isset($_POST['su_6'])  ? $checked : $unchecked);
$template->setValue('in_6',  isset($_POST['in_6'])  ? $checked : $unchecked);


$template->setValue('p_ex_1',  isset($_POST['p_ex_1'])  ? $checked : $unchecked);
$template->setValue('p_no_1', isset($_POST['p_no_1']) ? $checked : $unchecked);
$template->setValue('p_bu_1', isset($_POST['p_bu_1']) ? $checked : $unchecked);
$template->setValue('p_su_1',  isset($_POST['p_su_1'])  ? $checked : $unchecked);
$template->setValue('p_in_1',  isset($_POST['p_in_1'])  ? $checked : $unchecked);

$template->setValue('p_ex_2',  isset($_POST['p_ex_2'])  ? $checked : $unchecked);
$template->setValue('p_no_2',  isset($_POST['p_no_2']) ? $checked : $unchecked);
$template->setValue('p_bu_2',  isset($_POST['p_bu_2']) ? $checked : $unchecked);
$template->setValue('p_su_2',  isset($_POST['p_su_2'])  ? $checked : $unchecked);
$template->setValue('p_in_2',  isset($_POST['p_in_2'])  ? $checked : $unchecked);

$template->setValue('p_ex_3',  isset($_POST['p_ex_3'])  ? $checked : $unchecked);
$template->setValue('p_no_3',  isset($_POST['p_no_3']) ? $checked : $unchecked);
$template->setValue('p_bu_3',  isset($_POST['p_bu_3']) ? $checked : $unchecked);
$template->setValue('p_su_3',  isset($_POST['p_su_3'])  ? $checked : $unchecked);
$template->setValue('p_in_3',  isset($_POST['p_in_3'])  ? $checked : $unchecked);

$template->setValue('p_ex_4',  isset($_POST['p_ex_4'])  ? $checked : $unchecked);
$template->setValue('p_no_4',  isset($_POST['p_no_4']) ? $checked : $unchecked);
$template->setValue('p_bu_4',  isset($_POST['p_bu_4']) ? $checked : $unchecked);
$template->setValue('p_su_4',  isset($_POST['p_su_4'])  ? $checked : $unchecked);
$template->setValue('p_in_4',  isset($_POST['p_in_4'])  ? $checked : $unchecked);

$template->setValue('p_ex_5',  isset($_POST['p_ex_5'])  ? $checked : $unchecked);
$template->setValue('p_no_5',  isset($_POST['p_no_5']) ? $checked : $unchecked);
$template->setValue('p_bu_5',  isset($_POST['p_bu_5']) ? $checked : $unchecked);
$template->setValue('p_su_5',  isset($_POST['p_su_5'])  ? $checked : $unchecked);
$template->setValue('p_in_5',  isset($_POST['p_in_5'])  ? $checked : $unchecked);

$template->setValue('fecha_hoy', date('d-m-Y'));

$template->setValue('comentarios', $_POST['comentarios']);


header("Content-Description: File Transfer");
header("Content-Disposition: attachment; filename=\"anexo2.docx\"");
header("Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document");
header("Content-Transfer-Encoding: binary");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("Expires: 0");

$template->saveAs("php://output");
exit;
?>