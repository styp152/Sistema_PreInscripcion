<?PHP
include("conexion.php");
$accion=$_POST['guardar'];

/************************************************Datos Personales********************************************************
************************************************************************************************************************/
$nombre=$_POST['nombre'];
$nacionalidad=$_POST['nacionalidad'];
$codigo=$_POST['codigo'];
$cedula=$_POST['cedula'];
$apellidos= $_POST['apellidos'];
$nombres=$_POST['nombres'];
$fechanac=$_POST['FecNac'];
$lugarnacimiento=$_POST['lugarnacimiento'];
$edad= $_POST['edad'];
$sexo= $_POST['sexo'];
$estadocivil=$_POST['estadocivil'];
$direccion=$_POST['direccion'];
$ciudad=$_POST['ciudad'];
$estado=$_POST['estado'];
$municipio=$_POST['municipio'];
$telefonohab= $_POST['codtelefono'].''.$_POST['telefonohab'];
$celular= $_POST['codtelefonomovil'].''.$_POST['telefonomovil'];
$telefonoref= $_POST['telefonor1'].''.$_POST['telefonor2'];
$trabaja=$_POST['trabaja'];
$nombreenpresa=$_POST['nempresa'];
$tipoenpresa=$_POST['tempresa'];
$condicion=$_POST['condicion'];
$cargo=$_POST['cargo'];
/************************************************************************************************************************/
/************************************************************************************************************************/

/************************************************Datos Academicos********************************************************/
/************************************************************************************************************************/
$institucion=$_POST['institucion'];
$tipoplantel=$_POST['tplantel'];
$regimen=$_POST['regimen'];
$titulo=$_POST['titulo'];
$titulo1=$_POST['titulo1'];
$fechaexpe=$_POST['FecExp'];
$promocion=$_POST['promocion'];
$tituloregistrado=$_POST['tituloregistrado'];
/************************************************************************************************************************/
/************************************************************************************************************************/

/************************************************Datos Academicos********************************************************/
/************************************************************************************************************************/
$pnf=$_POST['pnf'];
$modalidad=$_POST['modalidad'];
$lacademico=$_POST['lacademico'];
$fechaingreso=$_POST['idTabIngFecBeca'];
$nucleo=$_POST['nucleo'];
/************************************************************************************************************************/
/************************************************************************************************************************/
/*$fechaingreso="15/12/2001";
 $fechanac=$fechaingreso;
$fechanac=$fechaexpe;*/

function fecha_mysql($fecha)
{
ereg( "([0-9]{1,2})-([0-9]{1,2})-([0-9]{2,4})", $fecha, $mifecha);
$fecha_lista=$mifecha[3]."-".$mifecha[2]."-".$mifecha[1];
return $fecha_lista;
}

$sql_4="SELECT COUNT(*) FROM datos_institucion, datos_academicos  WHERE datos_institucion.nucleo='$nucleo' and datos_institucion.pnf='$pnf' and datos_institucion.codigo=datos_academicos.codigo and datos_academicos.titulo='$titulo' GROUP BY pnf ";
$respuesta=mysql_query($sql_4,$conexion);

$row=mysql_fetch_array($respuesta);

if (!(($titulo=="Bachiller" and (($nucleo=="Mantecal" and ((($pnf=="Ingenieria en Agroalimentacion" or $pnf=="Ingenieria en Mecanica") and $row[0]<90)  or ($pnf=="Ingenieria en Construcción Civil" and $row[0]<60))) or ($nucleo=="Elorza" and ($pnf=="Ingenieria en Agroalimentacion" or $pnf=="Ingenieria en Construcción Civil") and $row[0]<30))) or ($titulo=="T.S.U." and $nucleo=="Mantecal"))){
    echo '<script>alert("No hay Cupos Disponibles en la Preinscripcion")</script>';
}
else{

$sql_1="INSERT INTO datos_personales (codigo, cedula, apellidos, nombres, fechanac, lugarnac,sexo, estadocivil,direccion, ciudad, estado, municipio, telefonohab, celular, telefonoref, trabaja, condicion, cargo) VALUES ('','$cedula','$apellidos','$nombres','".fecha_mysql($fechanac)."','$lugarnacimiento','$sexo','$estadocivil','$direccion','$ciudad', '$estado','$municipio','$telefonohab','$celular','$telefonoref','$trabaja','$condicion','$cargo')";
$result_1=mysql_query($sql_1,$conexion);


$sql_2="INSERT INTO datos_academicos (codigo,institucion, tipoplantel, regimen, titulo, fechaexpe, promocion, tituloregistrado) VALUES ('$cedula','$institucion','$tipoplantel','$regimen','$titulo','".fecha_mysql($fechaexpe)."','$promocion','$tituloregistrado')";
$result_2=mysql_query($sql_2,$conexion);

$sql_3="INSERT INTO datos_institucion (codigo, pnf, modalidad, lapsoacad, fechaingreso,nucleo) VALUES ('$cedula','$pnf','$modalidad','$lacademico','".fecha_mysql($fechaingreso)."','$nucleo')";
$result_3=mysql_query($sql_3,$conexion);
    
if($sexo=="0"){$sexo="Femenino";}else{$sexo="Masculino";}
echo " <html>
        <head></head>
        <body>
            <h3>Los datos han sido guardados</h3>
            <div align=\"center\"><button><a href=\"imprimir.php?cedula=$cedula&apellidos=$apellidos&nombres=$nombres&fechanac=$fechanac&lugarnacimiento=$lugarnacimiento&sexo=$sexo&estadocivil=$estadocivil&direccion=$direccion&ciudad=$ciudad&estado=$estado&municipio=$municipio&telefonohab=$telefonohab&celular=$celular&telefonoref=$telefonoref&trabaja=$trabaja&condicion=$condicion&cargo=$cargo&institucion=$institucion&tipoplantel=$tipoplantel&regimen=$regimen&titulo=$titulo&fechaexpe=$fechaexpe&promocion=$promocion&tituloregistrado=$tituloregistrado&pnf=$pnf&modalidad=$modalidad&lacademico=$lacademico&fechaingreso=$fechaingreso&nucleo=$nucleo&titulo1=$titulo1&nombreenpresa=$nombreenpresa&tipoenpresa=$tipoenpresa\">Imprimir Planilla de Preinscripcion</a></button></div>            
        </body>
    </html>";
}
include("cerrar_conexion.php");
?>
