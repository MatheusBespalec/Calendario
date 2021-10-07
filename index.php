<!DOCTYPE html>
<html>
	<head>
		<!-- Links -->
			<!-- CSS -->
			<link rel="stylesheet" type="text/css" href="css/style.css">
			<!-- Google Fonts -->
			<link rel="preconnect" href="https://fonts.googleapis.com">
			<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
			<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
		<!--  -->

		<title>Calendario</title>

		<!-- Meta Tags -->
			<!-- UTF-8 -->
			<meta charset="utf-8">
			<!-- Responsivo -->
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<!-- SEO -->
			<meta name="keywords" content="" />
			<meta name="description" content="" />
			<meta name="author" content="Matheus Bespalec - matheusbespalec@gmail.com">
			<meta http-equiv="X-UA-Compatible" content="IE=Edge">
			<meta name="robots" content="index,follow">
		<!--  -->

		<!-- Icone -->
		<link rel="icon" href="" type="image/x-icon" />
	</head>
	<body>
		<?php

			date_default_timezone_set('America/Sao_Paulo');

			$ano      = date('Y');
			$mes      = date('m');
			$diaAtual = date('d');

			$diasDoMes     = cal_days_in_month(CAL_GREGORIAN, $mes, $ano);
			$diaInicialMes = date('N',strtotime("$ano-$mes-01"));

			function forPT($ingles){
				switch ($ingles) {
					//Semana
					case 'Sunday ':
						$pt = 'Domingo';
						break;
					case 'Monday':
						$pt = 'Segunda-feira';
						break;
					case 'Tuesday':
						$pt = 'Terça-feira';
						break;
					case 'Wednesday':
						$pt = 'Quarta-feira';
						break;
					case 'Thursday':
						$pt = 'Quinta-feira';
						break;
					case 'Friday':
						$pt = 'Sexta-feira';
						break;
					case 'Saturday':
						$pt = 'Sábado';
						break;
					// Meses 
					case 'January':
						$pt = 'Janeiro';
						break;
					case 'February':
						$pt = 'Fevereiro';
						break;
					case 'March':
						$pt = 'Março';
						break;
					case 'April':
						$pt = 'Abril';
						break;
					case 'May':
						$pt = 'Maio';
						break;
					case 'June':
						$pt = 'Junho';
						break;
					case 'July':
						$pt = 'Julho';
						break;
					case 'August':
						$pt = 'Agosto';
						break;
					case 'September':
						$pt = 'Setembro';
						break;
					case 'October':
						$pt = 'Outubro';
						break;
					case 'November':
						$pt = 'Novembro';
						break;
					case 'December':
						$pt = 'Dezembro';
						break;
				}
				return $pt;

			} 

			$diaNome = forPT(date('l'));
			$mesNome = forPT(date('F'));

		?>
		<div class="container">
			<h2><?php echo "Hoje: $diaNome - $diaAtual de $mesNome de $ano "; ?></h2>
			<table>
				<tr>
					<td>Domingo</td>
					<td>Segunda</td>
					<td>Terça</td>
					<td>Quarta</td>
					<td>Quinta</td>
					<td>Sexta</td>
					<td>Sabado</td>
				</tr>

				<tr>
				<?php
					$n = 1;
					$dia = 1;

					$diasDoMes+= $diaInicialMes;
					while ($n <= $diasDoMes) {
						if($n % 7 == 1){
							echo '<tr>';
						}

						if ($n <= $diaInicialMes) {
							echo '<td></td>';
						}else{
							if($dia == $diaAtual)
								echo '<td class="select">'.$dia.'</td>';
							else
								echo '<td>'.$dia.'</td>';
							$dia++;
						}

						if($n % 7 == 0)
							echo '</tr>';

						$n++;
					}

				?>
			</table>
		</div><!--container-->
		
	</body>
</html>