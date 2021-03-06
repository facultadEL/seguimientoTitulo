<?

header("Content-Type: application/vnd.ms-excel");

header("Expires: 0");

header("Cache-Control: must-revalidate, post-check=0, pre-check=0");

header("content-disposition: attachment;filename=ListadoAlumnosSeguimientoTitulo.xls");

?>
<html>
<head>
<title> Seguimiento del alumno </title>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<style type="text/css">
	label {font-family: Cambria; text-transform: capitalize; padding: .5em; color: #0080FF;}
	#tabla {background: #F2F2F2;}
	#titulo3 { border-top: 2px solid #BDBDBD;border-bottom: 2px solid #BDBDBD;padding: 3px;}
	#titulo2 { border-top: 2px solid #BDBDBD;border-bottom: 2px solid #BDBDBD;padding: 3px;}
	l1 {font-family: Cambria;color: #0B615E; text-transform: capitalize; font-size: 1.5em;}
	l3 {font-family: Cambria;color: #0040FF; text-transform: capitalize; font-size: 1.5em;}
	l2 {font-family: Cambria;color: #424242; text-transform: capitalize; padding: .12em;}
	a { text-decoration:none }
</style>
</head>
<?php

function formatFecha($f){
	if($f != NULL){
		$vFecha = explode('-', $f);
		return $vFecha[2].'/'.$vFecha[1].'/'.$vFecha[0];		
	}else{
		return "";
	}
}

?>
<body link="#000000" vlink="#000000" alink="#FFFFFF">
<?php
$control = $_REQUEST['control'];
if($control==1){
	$palabra = $_REQUEST['palabra'];
	if ($palabra == "grado" || $palabra == "Grado"){
		$consulta = "SELECT id_seguimiento,id_alumno,nro_legajo,nombre_alumno,apellido_alumno,provincia_viviendo_alumno,localidad_viviendo_alumno,calle_alumno,numerocalle_alumno FROM alumno INNER JOIN seguimiento ON(seguimiento.alumno_fk = alumno.id_alumno) INNER JOIN carrera ON(carrera.id_carrera = seguimiento.carrera_fk) INNER JOIN nivel_carrera ON(carrera.nivel_carrera_fk = nivel_carrera.id_nivel_carrera) WHERE  
		   UPPER(nombre_alumno)        LIKE UPPER('%{$_REQUEST['palabra']}%')
		or UPPER(apellido_alumno)	   LIKE UPPER('%{$_REQUEST['palabra']}%')
		or UPPER(nombre_carrera)	   LIKE UPPER('%{$_REQUEST['palabra']}%')
		or UPPER(nombre_nivel_carrera) LIKE UPPER('{$_REQUEST['palabra']}')
		or UPPER(numerodni_alumno)	   LIKE UPPER('%{$_REQUEST['palabra']}%') ORDER BY id_nivel_carrera,id_carrera,apellido_alumno,nombre_alumno,id_alumno ASC";
	}else{
		$consulta = "SELECT id_seguimiento,id_alumno,nro_legajo,nombre_alumno,apellido_alumno,provincia_viviendo_alumno,localidad_viviendo_alumno,calle_alumno,numerocalle_alumno FROM alumno INNER JOIN seguimiento ON(seguimiento.alumno_fk = alumno.id_alumno) INNER JOIN carrera ON(carrera.id_carrera = seguimiento.carrera_fk) INNER JOIN nivel_carrera ON(carrera.nivel_carrera_fk = nivel_carrera.id_nivel_carrera) WHERE  
		   UPPER(nombre_alumno)        LIKE UPPER('%{$_REQUEST['palabra']}%')
		or UPPER(apellido_alumno)	   LIKE UPPER('%{$_REQUEST['palabra']}%')
		or UPPER(nombre_carrera)	   LIKE UPPER('%{$_REQUEST['palabra']}%')
		or UPPER(nombre_nivel_carrera) LIKE UPPER('%{$_REQUEST['palabra']}%')
		or UPPER(numerodni_alumno)	   LIKE UPPER('%{$_REQUEST['palabra']}%') ORDER BY id_nivel_carrera,id_carrera,apellido_alumno,nombre_alumno,id_alumno ASC";
	}
}else{
	$consulta = "SELECT id_seguimiento,id_alumno,nro_legajo,nombre_alumno,apellido_alumno,provincia_viviendo_alumno,localidad_viviendo_alumno,calle_alumno,numerocalle_alumno FROM alumno INNER JOIN seguimiento ON(seguimiento.alumno_fk = alumno.id_alumno) INNER JOIN carrera ON(carrera.id_carrera = seguimiento.carrera_fk) INNER JOIN nivel_carrera ON(carrera.nivel_carrera_fk = nivel_carrera.id_nivel_carrera) ORDER BY id_nivel_carrera,id_carrera,apellido_alumno,nombre_alumno,id_alumno ASC";
}
include_once 'conexion.php';
echo '<table align="center" cellspacing="1" cellpadding="4" border="1" bgcolor=#585858 id="tabla">';
	echo '<tr bgcolor="#FFFFFF">';
		echo '<td id="titulo3" colspan="14" align="center"><l1>Seguimiento</l1></td>';
	echo '</tr>';
	echo '<tr bgcolor="#C3C3C3">';
		echo '<td align="center"><strong><label>Legajo</label></strong></td>';
		echo '<td align="center"><strong><label>Alumno</label></strong></td>';
		echo '<td align="center"><strong><label>Carrera</label></strong></td>';
		echo '<td align="center"><strong><label>Fecha Solicitud</label></strong></td>';
		echo '<td align="center"><strong><label>Fecha Resolucion CD</label></strong></td>';
		echo '<td align="center"><strong><label>Nro Resolucion CD</label></strong></td>';
		echo '<td align="center"><strong><label>Fecha Nota Envio Rectorado</label></strong></td>';
		echo '<td align="center"><strong><label>Nro Nota</label></strong></td>';
		echo '<td align="center"><strong><label>Fecha Resolucion CS</label></strong></td>';
		echo '<td align="center"><strong><label>Nro Resolucion CS</label></strong></td>';
		//echo '<td align="center"><strong><label>Anio ¿?</label></strong></td>';
		echo '<td align="center"><strong><label>Fecha Ingreso Diploma</label></strong></td>';
		echo '<td align="center"><strong><label>Fecha Retiro Diploma</label></strong></td>';
		echo '<td align="center"><strong><label>Fecha Ingreso Anal&iacute;tico</label></strong></td>';
		echo '<td align="center"><strong><label>Fecha Retiro Anal&iacute;tico</label></strong></td>';
		//echo '<td align="center"><strong><label>Fecha Ingreso Anal&iacute;tico</label></strong></td>';
	echo '</tr>';
	$val = pg_query($consulta);
	while($rowAlumno=pg_fetch_array($val,NULL,PGSQL_ASSOC)){
		$nombre_alumno = $rowAlumno['nombre_alumno'];
		$apellido_alumno = $rowAlumno['apellido_alumno'];
		$nroLegajo = $rowAlumno['nro_legajo'];
		$idAlumno = $rowAlumno['id_alumno'];
		$idSeguimiento = $rowAlumno['id_seguimiento'];
	
$seguimiento = pg_query("SELECT * FROM seguimiento INNER JOIN carrera ON(seguimiento.carrera_fk = carrera.id_carrera) WHERE id_seguimiento = $idSeguimiento ORDER BY id_seguimiento DESC");
while($row=pg_fetch_array($seguimiento,NULL,PGSQL_ASSOC)){
	echo '<tr>';
		echo '<td align="center"><l2>'.$nroLegajo.'</l2></td>';
		echo '<td align="center"><l2>'.$apellido_alumno.', '.$nombre_alumno.'</l2></td>';
		echo '<td align="center"><l2>'.$row['nombre_carrera'].'</l2></td>';
		echo '<td align="center"><l2>'.formatFecha($row['fecha_solicitud']).'</l2></td>';
		echo '<td align="center"><l2>'.formatFecha($row['fecha_rescd']).'</l2></td>';
		if($row['fecha_rescd']!=NULL){
			$numResFk = $row['num_res_cd_fk'];
			$sqlNumResCd = pg_query("SELECT numero_res FROM numero_resolucion WHERE id_numero_resolucion=$numResFk");
			$rowNumResCd = pg_fetch_array($sqlNumResCd);
			$numRes = $rowNumResCd['numero_res'];
			$numeroResolucionCd = explode('-', $numRes);
		}else{
			$numeroResolucionCd[1] = "";
		}
		echo '<td align="center"><l2>'.$numeroResolucionCd[1].'</l2></td>';
		echo '<td align="center"><l2>'.formatFecha($row['fecha_nota_envio_rec']).'</l2></td>';
		if($row['fecha_nota_envio_rec']!=NULL){
			$numNotaFk = $row['num_nota_fk'];
			$sqlNumNota = pg_query("SELECT numero_nota FROM numero_nota_rectorado WHERE id_numero_nota_rectorado=$numNotaFk");
			$rowNumNota = pg_fetch_array($sqlNumNota);
			$numNota = $rowNumNota['numero_nota'];
		}else{
			$numNota = "";
		}
		echo '<td align="center"><l2>'.$numNota.'</l2></td>';
		echo '<td align="center"><l2>'.formatFecha($row['fecha_rescs']).'</l2></td>';
		if($row['fecha_rescs']!=NULL){
			$numResFk = $row['num_res_cs_fk'];
			$sqlNumResCs = pg_query("SELECT numero_res FROM numero_resolucion WHERE id_numero_resolucion=$numResFk");
			$rowNumResCs = pg_fetch_array($sqlNumResCs);
			$numRes = $rowNumResCs['numero_res'];
			$numeroResolucionCs = explode('-', $numRes);
		}else{
			$numeroResolucionCs[1] = "";
		}
		echo '<td align="center"><l2>'.$numeroResolucionCs[1].'</l2></td>';
		echo '<td align="center"><l2>'.formatFecha($row['fecha_ingreso_diploma']).'</l2></td>';
		echo '<td align="center"><l2>'.formatFecha($row['fecha_retiro_diploma']).'</l2></td>';
		echo '<td align="center"><l2>'.formatFecha($row['fecha_ingreso_analitico']).'</l2></td>';
		echo '<td align="center"><l2>'.formatFecha($row['fecha_retiro_analitico']).'</l2></td>';


	echo '</tr>';
}
}
echo '</table>';
?>
<p>
<a href="listadoAlumno.php"><center><input type="button" value="Atr&aacute;s"></center></a>
</p>
</body>
</html>