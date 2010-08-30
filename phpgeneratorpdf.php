<?php
$titulo=$_POST['titulo'];
$pnf=$_POST['pnf'];
$nucleo=$_POST['nucleo'];
include ("conexion.php");
$sql_4="SELECT datos_personales.cedula, datos_personales.apellidos, datos_personales.nombres, datos_personales.celular FROM datos_institucion, datos_academicos, datos_personales  WHERE datos_institucion.nucleo='$nucleo' and datos_institucion.pnf='$pnf' and datos_academicos.titulo='$titulo' and datos_institucion.codigo=datos_academicos.codigo and datos_personales.cedula=datos_academicos.codigo ";
$respuesta=mysql_query($sql_4,$conexion) or die(mysql_error());
include "cerrar_conexion.php";
require_once('class.ezpdf.php');
$pdf =& new Cezpdf('a4');
$pdf->selectFont('fonts/courier.afm');
$datocreator= array (
                    'Title'=>'Lista de preinscritos',
                    'Author'=>'styp152',
                    'Subjet'=>'Planilla para Imprimir',
                    'Creator'=>'styp152@gmail.com',
                    'Producer'=>'http://styp152.wordpress.com'
                     );
$pdf->addInfo($datocreator);;
$pdf->ezSetCmMargins(1,1,1.5,1.5);
$pdf->ezImage("img/header.jpg", 0, 520, 'none', 'left');
$pdf->ezText("<b>Lista de Preinscritos</b>\n",20,array('justification'=>'center'));
$options=array('width'=> 520,'titleFontSize' => 18,'fontSize' => 12, 'shaded'=> 2, 'shadeCol' => array(1.0,1.0,1.0));
$i = 0;
while($datatmp = mysql_fetch_assoc($respuesta)) { 
	$i+=1;
	$data[] = array_merge($datatmp, array('num'=>$i));
}
$titles = array(
		'num'=>'<b>Num</b>',
		'cedula'=>'<b>Cedula</b>',
		'apellidos'=>'<b>Apellidos</b>',
                'nombres'=>'<b>Nombres</b>',
		'celular'=>'<b>Telefono Celular</b>'
		);
$pdf->ezTable($data, $titles, '', $options);
$pdf->ezText("\n\n\n", 10);
$pdf->ezText("<b>Fecha:</b> ".date("d/m/Y"), 10);
$pdf->ezText("<b>Hora:</b> ".date("H:i:s")."\n\n", 10);
$pdf->ezStream();

?>