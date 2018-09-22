<table>
	<button type="button" onclick="proximoMes($meses)"> > </button>
	<?php
		$meses = 0; //Uma variavel global -> vale para todo docs

		// print_r - leitura bruta de array
		// var_dump - leitura detalhada de array

		$info = array('Janeiro', 'Feverreiro', 'Março', 'Abril', 'Julho', 'Junho', 'Agosto');;

		echo "<h2>".$info[$meses]."<h2>"; //concatenando

		//if($meses == $a[$meses]){
			//echo "<h2> $a[$meses] </h2>";
		//}

	?>
	<button type="button" onclick="anteriorMes($meses)"> < </button>

	<tr>
		<th>D</th> <!-- domingo -->
		<th>S</th>
		<th>T</th>
		<th>Q</th>
		<th>Q</th>
		<th>S</th>
		<th>S</th>
	</tr>

	<tr>
		<?php
			$dias = 1;
			while($dias<=30){
				if($dias==7 or $dias==14 or $dias==28){
					echo "
					</tr>
					<tr>
						<td> $dias </td>
					</tr>";
				}
				else{
					echo "
						<td> $dias </td>";
				}
				$dias++;
			}
		?>
	<!--</tr>-->
</table>

	<?php
		function proximoMes($mes) {
			//$mes é somente uma variavel de escopo -> somente dentro da função
			if (this.$mes > 12) {
				return this.$mes = 12;
			}
			else {
				return this.$mes++;
			}
		}
		function anteriorMes($mes) {
			if (this.$mes < 0) {
				return this.$mes = 0;
			}
			else{
				return this.$mes--;
			}
		}
	?>
