<?php
$meses=array(1=>"Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio",	"Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
$month=date("n");
$year=date("Y");
$hoy=date("j");
$primerdia=date("w",mktime(0,0,0,$month,1,$year))+7;
$ultimodia=date("d",(mktime(0,0,0,$month+1,1,$year)-1));


?>
 
<!DOCTYPE html>
<html>
<head>
	<title>Calendario</title>
	<style>
		table, th, td {
    		border: 1px solid black;
		}
		#something p{
			display:none;
			/* no puedo esconderlo D: */
		}
	</style>
</head>
 
<body>
<table id="calendario">
	<tr>
		<th>Lunes</th>
		<th>Martes</th>
		<th>Miercoles</th>
		<th>Jueves</th>
		<th>Viernes</th>
		<th>Sabado</th>
		<th>Domingo</th>
	</tr>
	<tr bgcolor="silver">
		<?php
		$ultimacasilla=$primerdia+$ultimodia;
		for($i=1;$i<=42;$i++)
		{

			if($i==$primerdia)
			{
				$dia=1;
			}

			if($i<$primerdia || $i>=$ultimacasilla)
			{
				echo "<td id='something'><p>something</p></td>";
			}else{
				if($dia==$hoy)
					echo "<td class='hoy'>$dia</td>";
				else
					echo "<td>$dia</td>";
				$dia++;
			}

			if($i%7==0)
			{
				echo "</tr><tr>\n";
			}
		}
	?>
	</tr>
</table>
</body>
</html>