<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<script src="jquery-latest.js"></script>
	<script type="text/javascript" src="jquery.validate.js"></script>
	<title>Graduado</title>
	<style type="text/css">
			label {font-family: Arial; color: #000000; font-size: 1em;}
			TextoFin {font-family: Arial; color: #000000;font-weight:bold; font-size: 1.2em;}
			label1 {font-family: Arial; color: #000000;text-decoration: underline;font-weight:bold; font-size: 1.3em;}
			l1 {font-family: Arial; color: #2E2E2E; font-size: 1em;}
			l2{font-size: 20px;}
			l3{font-weight: bold;}
    </style>		
</head>
<body onload="print()">
<?php
include_once "conexion.php";
$id_Alumno = $_REQUEST['idAlumno'];
$idCarrera = $_REQUEST['idCarrera'];
	$sqlAlumno = pg_query("SELECT alumno.*,carrera_fk FROM alumno INNER JOIN seguimiento ON(alumno.id_alumno = seguimiento.alumno_fk) WHERE id_alumno = $id_Alumno AND carrera_fk=$idCarrera");
	$rowAlumno = pg_fetch_array($sqlAlumno);
		$nombre_alumno = $rowAlumno['nombre_alumno'];
		$apellido_alumno = $rowAlumno['apellido_alumno'];
		$nro_legajo = $rowAlumno['nro_legajo'];
		$tipodni_alumno = $rowAlumno['tipodni_alumno'];
		$numerodni_alumno = $rowAlumno['numerodni_alumno'];
		$fechanacimiento_alumno = $rowAlumno['fechanacimiento_alumno'];
			$mostrar = explode('-',$fechanacimiento_alumno);
				$anio = $mostrar[0];
				$mes = $mostrar[1];
				$dia = $mostrar[2];
		$fecha_nacimiento_alumno = $dia.'/'.$mes.'/'.$anio;
		$localidad_nacimiento_alumno = $rowAlumno['localidad_nacimiento_alumno'];
		$provincia_viviendo_alumno = $rowAlumno['provincia_viviendo_alumno'];
		$localidad_viviendo_alumno = $rowAlumno['localidad_viviendo_alumno'];
		$cp_alumno = $rowAlumno['cp_alumno'];
		$calle_alumno = $rowAlumno['calle_alumno'];
		$numerocalle_alumno = $rowAlumno['numerocalle_alumno'];
		$piso_alumno = $rowAlumno['piso_alumno'];
		$dpto_alumno = $rowAlumno['dpto_alumno'];
		$carrera_alumno = $rowAlumno['carrera_fk'];
		$caracteristicaF_alumno = $rowAlumno['caracteristicaf_alumno'];
		$telefono_alumno = $rowAlumno['telefono_alumno'];
		$caracteristicaC_alumno = $rowAlumno['caracteristicac_alumno'];
		$celular_alumno = $rowAlumno['celular_alumno'];
		$mail_alumno = $rowAlumno['mail_alumno'];
		$mail_alumno2 = $rowAlumno['mail_alumno2'];
		$facebook_alumno = $rowAlumno['facebook_alumno'];
		$twitter_alumno = $rowAlumno['twitter_alumno'];
		$password_alumno = $rowAlumno['password_alumno'];
		$provincia_trabajo_alumno = $rowAlumno['provincia_trabajo_alumno'];
		$localidad_trabajo_alumno = $rowAlumno['localidad_trabajo_alumno'];
		$cp_alumno2 = $rowAlumno['cp_alumno2'];
		$empresa_trabaja_alumno = $rowAlumno['empresa_trabaja_alumno'];
		$perfil_laboral_alumno = $rowAlumno['perfil_laboral_alumno'];
		$destinoImagen = $rowAlumno['foto_alumno'];
		$ancho_final = $rowAlumno['ancho_final'];
		$alto_final = $rowAlumno['alto_final'];
		$ultima_materia_alumno = $rowAlumno['ultima_materia_alumno'];
		$fechaUltimaMatAlumno = $rowAlumno['fecha_ultima_mat_alumno'];

		$codigo_impresion = $rowAlumno['codigo_impresion'];

			$mostrar = explode('-',$fechaUltimaMatAlumno);
					$anio = $mostrar[0];
					$mes = $mostrar[1];
					$dia = $mostrar[2];
			$fecha_ultima_mat_alumno = $dia.'/'.$mes.'/'.$anio;
		$diaActual = date('d');
		$mesActual = date('m');
		$anioActual = date('Y');
	
	if ($mesActual == 01 or $mesActual == 1){
		$mesActual = 'Enero';
	}
	if ($mesActual == 02 or $mesActual == 2){
		$mesActual = 'Febrero';
	}
	if ($mesActual == 03 or $mesActual == 3){
		$mesActual = 'Marzo';
	}
	if ($mesActual == 04 or $mesActual == 4){
		$mesActual = 'Abril';
	}
	if ($mesActual == 05 or $mesActual == 5){
		$mesActual = 'Mayo';
	}
	if ($mesActual == 06 or $mesActual == 6){
		$mesActual = 'Junio';
	}
	if ($mesActual == 07 or $mesActual == 7){
		$mesActual = 'Julio';
	}
	if ($mesActual == 08 or $mesActual == 8){
		$mesActual = 'Agosto';
	}
	if ($mesActual == 09 or $mesActual == 9){
		$mesActual = 'Septiembre';
	}
	if ($mesActual == 10){
		$mesActual = 'Octubre';
	}
	if ($mesActual == 11){
		$mesActual = 'Noviembre';
	}
	if ($mesActual == 12){
		$mesActual = 'Diciembre';
	}
$esp = '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#8226; ';
$esp1 = '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
?>
<table width="100%" height="90%">
	<tr width="100%">
		<td width="100%" align="right"><label><?php echo 'Villa María, &nbsp;&nbsp;&nbsp;&nbsp; de &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; de &nbsp;&nbsp;&nbsp;&nbsp;'?></label></td>
	</tr>
	<tr>
		<td width="100%"><label for="Texto">Se&ntilde;or<br>Decano de la<br>Facultad Regional Villa Mar&iacute;a de la<br>UNIVERSIDAD TECNOL&Oacute;GICA NACIONAL<br>Ing. Pablo Andr&eacute;s ROSSO<br>S._______________/_______________D.<br><br></label></td>
	</tr>
	<tr>
		<?php
				$consultaCarrera=pg_query("SELECT * FROM carrera");
				while($rowCarrera=pg_fetch_array($consultaCarrera)){
					$id = $rowCarrera['id_carrera'];
					if($id == $carrera_alumno){						
						$carrera = $rowCarrera['nombre_carrera'];
					}
			}
		?>
		<td width="100%"><label for="Texto">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;El/La  que  suscribe, <?php echo $apellido_alumno.', '.$nombre_alumno.', '; ?>alumno/a de esta Casa de Altos Estudios, tiene el agrado de dirigirse al Sr. Decano y, por su intermedio ante quien corresponda a los efectos de solicitar <l3>se me extienda el t&iacute;tulo de <strong><l2><?php echo $carrera; ?></l2></strong></l3>, por haber cumplido las exigencias del respectivo Plan de Estudios.<br><br></label></td>
	</tr>
	<tr>
		<td width="100%"><label for="Texto">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Acompa&ntilde;a al presente, los datos complementarios correspondientes.<br><br></label></td>
	</tr>
	<tr>
	<?php
	//Datos a solicitar según carrera
	/*
	Datos solicitados Mail Fer:

	1. * Tecnico en Negociacion de bienes, Logistica y * mecatrónica ----- Fotocopia de DNI, Analítico del Secundario y Partida de Nacimiento
	* 2. Posgrado----- Fotocopia de DNI y Diploma de titulo de Grado
	* 3. * carreras de grado, * ingenierias, * LAR, tecnico electronico, tecn quimico, analista en sistemas y tecnico LAR -----Fotocopia de DNI y partida de Nacimiento
	* 4. Lic en tecnologia educ, lic en ingles, lic. en ciencias aplicadas----- Fotocopia de DNI y Analítico de profesorado

	1;"Ingeniero/a en Sistemas de Información";1
	2;"Ingeniero/a en Electrónica";1
	3;"Ingeniero/a Química";1
	4;"Ingeniero/a Mecánica";1
	5;"Licenciado/a en Administración Rural";1
	6;"Técnico/a Superior en Mecatrónica";3
	7;"Analista Universitario/a en Sistemas de Información";3
	8;"Técnico/a Universitario/a en Administración Rural";3
	9;"Técnico/a Universitario/a en Electrónica";3
	10;"Técnico/a Universitario/a en Química";3
	11;"Licenciado/a en Lengua Inglesa";1
	12;"Técnico/a Superior en Negociación de Bienes";3
	13;"Especialista en Higiene y Seguridad";2
	14;"Licenciado/a en Educación Física";1
	15;"Maestría en Ingeniería Gerencial";2
	16;"Licenciado/a en Tecnologia Educativa";2
	17;"Especialista en Tecnologia de los Alimentos";2
	18;"Licenciado/a en Ciencias Aplicadas";1
	19;"Especialista en Soldadura";2
	20;"Tecnico/a en Administración y Gestión de Institucion de Educ. Sup.";3

	*/
	if($idCarrera == 11 || $idCarrera == 18)
	{
		echo '<td width="100%"><label for="Texto">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Se adjunta Fotocopia de DNI y Analítico de profesorado por duplicado.<br><br></label></td>';
	} else {
		echo '<td width="100%"><label for="Texto">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Se adjunta Fotocopia de DNI y partida de Nacimiento por duplicado.<br><br></label></td>';
	}
		//<td width="100%"><label for="Texto">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Se adjunta Fotocopia de DNI por duplicado.<br><br></label></td>
	?>
	</tr>
	<tr>
		<td width="100%"><label for="Texto">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sin otro particular, saluda al Sr. Decano con toda consideraci&oacute;n.<br><br><br><br><br><br></label></td>
	</tr>
	<tr width="100%">
		<td width="100%" align="right"><label for="Texto">Firma _______________________</label><br><br><br></td>
	</tr>
	<tr width="100%">
		<td width="100%" align="center"><label1>DATOS COMPLEMENTARIOS</label1><br><br><br></td>
	</tr>
	<tr>
		<td width="100%"><label for="Datos">Apellido y Nombres: </label><l1><?php echo $apellido_alumno.', '.$nombre_alumno; ?></l1></td>
	</tr>
	<tr>
		<td width="100%"><label for="Datos">Documento Nacional de Identidad N&deg;: </label><l1><?php echo $numerodni_alumno; ?></l1></td>
	</tr>
	<tr>
		<td width="100%"><label for="Datos">Lugar de nacimiento: </label><l1><?php echo $localidad_nacimiento_alumno; ?></l1></td>
	</tr>
	<tr>
		<td width="100%"><label for="Datos">Fecha de nacimiento: </label><l1><?php echo $fecha_nacimiento_alumno; ?></l1></td>
	</tr>
	<tr>
		<td width="100%"><label for="Datos">Domicilio actual: </label><l1><?php echo $calle_alumno.' '.$numerocalle_alumno; ?></l1><label for="Datos"> Piso: </label><l1><?php echo $piso_alumno; ?></l1><label for="Datos"> Dpto: </label><l1><?php echo $dpto_alumno; ?></l1></td>
	</tr>
	<tr>
		<td width="100%"><label for="Datos">Localidad: </label><l1><?php echo $localidad_viviendo_alumno; ?></l1><label for="Datos"> Prov.: </label><l1><?php echo $provincia_viviendo_alumno; ?></l1></td>
	</tr>
	<tr>
		<td width="100%"><label for="Datos">Teléfono: </label><l1><?php echo $caracteristicaF_alumno.' - '.$telefono_alumno; ?></l1><label for="Datos"> Cel.: </label><l1><?php echo $caracteristicaC_alumno.' - '.$celular_alumno; ?></l1></td>
	</tr>
	<tr>
		<td width="100%"><label for="Datos">e-mail: </label><l1><?php echo $mail_alumno?></l1></td>
	</tr>
	<tr>
		<td width="100%"><label for="Datos">&Uacute;ltima materia aprobada y fecha: </label><l1><?php echo $ultima_materia_alumno.', rendida el '.$fecha_ultima_mat_alumno; ?></l1></td>
	</tr>
	<tr>
		<td width="100%"><label for="Datos">Legajo Personal U.T.N. Fac. Reg. Villa María: Nº 17: </label><l1><?php echo $nro_legajo?></l1><br><br></td>
	</tr>
	<tr width="100%"><td width="100%"><hr size="2" width="100%" align="center"/></td></tr>
		<tr><td width="100%"><TextoFin>Toda notificaci&oacute;n oficial se realizar&aacute; &uacute;nicamente a los datos consignados en la presente, quedando el solicitante comprometido a notificar cambios. Este documento tiene caracter de <b><u>DECLARACI&Oacute;N JURADA</u></b></TextoFin></td></tr>
	<tr width="100%"><td width="100%"><hr size="2" width="100%" align="center"/></td></tr>
	<tr width="100%">
		<td width="100%" align="center"><b>Codigo de control interno:</b><?php echo $codigo_impresion;?></td>
	</tr>
</table>
</body>
</html>