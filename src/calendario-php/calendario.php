<table>
	<button type="button" onclick="func_prox_mes($meses)"> > </button>
	<!--<button type="button" onclick="$meses--;"> < </button>-->
	<?php 
		$meses=0
		$info = array('Janeiro', 'Feverreiro', 'Março', 'Abril', 'Julho', 'Junho', 'Agosto');
		list($a[0], $a[1], $a[2], $a[3], $a[4], $a[5], $a[6, $a[7]]) = $info;

		if($meses==$a[$meses]){
			echo "<h2> $a[$meses] </h2>"
		}
	?>
	<button type="button" onclick="func_ant_mes($meses)"> < </button>

	<tr>
		<th>D</th>
		<th>S</th>
		<th>T</th>
		<th>Q</th>
		<th>Q</th>
		<th>S</th>
		<th>S</th>
	</tr>		 

	<tr>
		<?php
			$dias=0; 
			while($dias<=30){
				if($dias==7 or $dias==14 or $dias==28){
					echo "
					</tr>
					<tr>
						<td> $dias </td>
					</tr>	
					"	
				}
				else{
					echo "
						<td> $dias </td>
					"
				}
				$dias++;
			}
		?>
	<!--</tr>-->
</table>
	
	<?php
		function func_prox_mes($mes) {
			return this.$mes++;
		}
		function func_ant_mes($mes) {
			return this.$mes--;
		}
	?>