<?php
/************************************************Datos Personales********************************************************
************************************************************************************************************************/
$nacionalidad=$_GET['nacionalidad'];
$codigo=$_GET['codigo'];
$cedula=$_GET['cedula'];
$apellidos= $_GET['apellidos'];
$nombres=$_GET['nombres'];
$fechanac=$_GET['fechanac'];
$lugarnacimiento=$_GET['lugarnacimiento'];
$edad= $_GET['edad'];
$sexo= $_GET['sexo'];
$estadocivil=$_GET['estadocivil'];
$direccion=$_GET['direccion'];
$ciudad=$_GET['ciudad'];
$estado=$_GET['estado'];
$municipio=$_GET['municipio'];
$telefonohab= $_GET['telefonohab'];
$celular= $_GET['celular'];
$telefonoref= $_GET['telefonoref'];
$trabaja=$_GET['trabaja'];
$nombreenpresa=$_GET['nombreenpresa'];
$tipoenpresa=$_GET['tipoenpresa'];
$condicion=$_GET['condicion'];
$cargo=$_GET['cargo'];
/************************************************************************************************************************/
/************************************************************************************************************************/

/************************************************Datos Academicos********************************************************/
/************************************************************************************************************************/
$institucion=$_GET['institucion'];
$tipoplantel=$_GET['tipoplantel'];
$regimen=$_GET['regimen'];
$titulo=$_GET['titulo'];
$titulo1=$_GET['titulo1'];
$fechaexpe=$_GET['fechaexpe'];
$promocion=$_GET['promocion'];
$tituloregistrado=$_GET['tituloregistrado'];
/************************************************************************************************************************/
/************************************************************************************************************************/

/************************************************Datos Academicos********************************************************/
/************************************************************************************************************************/
$pnf=$_GET['pnf'];
$modalidad=$_GET['modalidad'];
$lacademico=$_GET['lacademico'];
$fechaingreso=$_GET['fechaingreso'];
$nucleo=$_GET['nucleo'];
/************************************************************************************************************************/
/************************************************************************************************************************/

include('class.ezpdf.php');
function edad($fecha)
{
ereg( "([0-9]{1,2})-([0-9]{1,2})-([0-9]{2,4})", $fecha, $mifecha);
$dianaz=$mifecha[1];
$mesnaz=$mifecha[2];
$anioonaz=$mifecha[3];
$dia=date(j);
$mes=date(n);
$anio=date(Y);
if(($mes==$mesnaz) and ($dia<$dianaz)){
    $anio-=1;
}
if($mes<$mesnaz){
    $anio-=1;
}
$edad=$anio-$anioonaz;
return $edad;
}
$pdf =& new Cezpdf('a4');
$pdf->selectFont('fonts/courier.afm');
$datocreator= array (
                    'Title'=>'Planilla de Preinscripcion',
                    'Author'=>'styp152',
                    'Subjet'=>'Planilla para Imprimir',
                    'Creator'=>'styp152@gmail.com',
                    'Producer'=>'http://styp152.wordpress.com'
                     );
$pdf->addInfo($datocreator);
$pdf->ezImage("img/header.jpg", 0, 520, 'none', 'left');
$pdf->ezText("<b>Planilla de Preinscripcion</b>\n",20,array('justification'=>'center'));
$options=array('width'=> 520,'titleFontSize' => 18,'fontSize' => 12, 'showLines'=> 0,'showHeadings' => 0,'shaded'=> 2, 'shadeCol' => array(1.0,1.0,1.0));
$data[] = array('n1'=>'<b>Cedula de Identidad</b>', 'n2'=>'<b>Apellidos</b>', 'n3'=>'<b>Nombres</b>');
$data[]= array('n1'=>$nacionalidad+$cedula, 'n2'=>$apellidos, 'n3'=>$nombres);
$data[] = array('n1'=>'<b>Fecha de Nacimiento</b>', 'n2'=>'<b>Lugar de Nacimiento</b>', 'n3'=>'<b>Sexo</b>');
$data[]= array('n1'=>$fechanac, 'n2'=>$lugarnacimiento, 'n3'=>$sexo);
$data[] = array('n1'=>'<b>Estado Civil</b>', 'n2'=>'<b>Edad</b>', 'n3'=>'<b>Direccion</b>');
$data[]= array('n1'=>$estadocivil, 'n2'=>edad($fechanac), 'n3'=>$direccion);
$data[] = array('n1'=>'<b>Ciudad</b>', 'n2'=>'<b>Estado</b>', 'n3'=>'<b>Municipio</b>');
$data[]= array('n1'=>$ciudad, 'n2'=>$estado, 'n3'=>$municipio);
$data[] = array('n1'=>'<b>Telefono Habitacion</b>', 'n2'=>'<b>Telefono Movil</b>', 'n3'=>'<b>Telefono de Referencia</b>');
$data[]= array('n1'=>$telefonohab, 'n2'=>$celular, 'n3'=>$telefonoref);
$data[] = array('n1'=>'<b>Trabaja</b>', 'n2'=>'<b>Tipo de Empresa</b>', 'n3'=>'');
$data[]= array('n1'=>$trabaja, 'n2'=>$tipoenpresa, 'n3'=>'');
$data[] = array('n1'=>'<b>Nombre de la Empresa</b>', 'n2'=>'<b>Condicion</b>', 'n3'=>'Cargo');
$data[]= array('n1'=>$nombreenpresa, 'n2'=>$condicion, 'n3'=>$cargo);
$pdf->ezTable($data,$titles,'Datos Personales',$options );
$data=null;
$data[] = array('n1'=>'<b>Nombre de la Institucion</b>', 'n2'=>'<b>Tipo de Plantel</b>');
$data[]= array('n1'=>$institucion, 'n2'=>$tipoplantel);
$data[] = array('n1'=>'<b>Regimen de Estudio</b>', 'n2'=>'<b>Titulo Obtenido</b>');
$data[]= array('n1'=>$regimen, 'n2'=>$titulo. ' ' . $titulo1);
$data[] = array('n1'=>'<b>Fecha de Expedicion</b>', 'n2'=>'<b>Promocion</b>');
$data[]= array('n1'=>$fechaexpe, 'n2'=>$promocion);
$data[] = array('n1'=>'<b>Titulo Registrado</b>', 'n2'=>'');
$data[]= array('n1'=>$tituloregistrado, 'n2'=>''); 
$pdf->ezTable($data,$titles,'Datos Academicos',$options );
$data=null;
$data[] = array('n1'=>'<b>Programa Nacional de Formacion</b>', 'n2'=>'<b>Modalidad de Ingreso</b>');
$data[]= array('n1'=>$pnf, 'n2'=>$modalidad);
$data[] = array('n1'=>'<b>Lapso Academico</b>', 'n2'=>'<b>Nucleo</b>');
$data[]= array('n1'=>$lacademico, 'n2'=>$nucleo);
$data[] = array('n1'=>'<b>Fecha de Ingreso</b>', 'n2'=>'');
$data[]= array('n1'=>$fechaingreso, 'n2'=>'');
$pdf->ezTable($data,$titles,'Ingreso a la Institucion',$options );
$data=null;
$data[] = array('n1'=>'<b>Fotocopia de la Cedula de Identidad, ampliada y legible</b>', 'n2'=>'<b>Original y Copia de Constancia de Buena Conducta</b>', 'n3'=>'<b>Original y Copia de Partida de Nacimiento Vigente o en buenas condiciones</b>');
$data[]= array('n1'=>'', 'n2'=>'', 'n3'=>'');
$data[] = array('n1'=>'<b>2 Fotografias Recientes</b>', 'n2'=>'<b>Original y Copia del Certificado de Salud Vigente</b>', 'n3'=>'<b>Copia del Comprobante de Inscripcion Militar</b>');
$data[]= array('n1'=>'', 'n2'=>'', 'n3'=>'');
$data[] = array('n1'=>'<b>Constancia de Trabajo</b>', 'n2'=>'<b>Fondo Negro del Titulo de T.S.U., en caso de ser 
					egresado de otro Estado o de una Institucion Privada deber 
					ser autenticadas por la Institucion 
					Correspondiente</b>', 'n3'=>'<b>Original y Copia de Notas Certificadas de T.S.U., en caso de ser egresado de otro Estado o de una Institucion Privada deber ser autenticadas por la Institucion Correspondiente </b>');
$data[]= array('n1'=>'', 'n2'=>'', 'n3'=>'');
$pdf->ezText("\n\n\n");
$pdf->ezTable($data,$titles,'Requisitos A Consignar',$options );
$pdf->ezText("\n\n\n");
$pdf->ezText("<b>Fecha:</b> ".date("d/m/Y"),10);
$pdf->ezText("<b>Hora:</b> ".date("H:i:s"),10);
$pdf->ezStream();
?>