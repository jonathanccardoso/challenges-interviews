<table>
		<button type="button" onclick="func_prox_mes($meses)"> < </button>
		<!--<button type="button" onclick="$meses--;"> < </button>-->
			<?php 
				$meses=0
				$info = array('Janeiro', 'Feverreiro', 'Março', 'Abril');
				list($a[0], $a[1], $a[2] $a[3]) = $info;

				if($meses==$a[$meses]){
					echo "<h2> $a[$meses] </h2>"
				}
				else{
					echo "Mês não válido!"	
				}
			?>
		<button type="button" onclick="func_ant_mes($meses)"> > </button>

		<tr>
		    <th>D</th>
		    <th>S</th>
		    <th>T</th>
		    <th>Q</th>
		    <th>Q</th>
		    <th>S</th>
		    <th>S</th>
		 </tr>		 

		 <!--<tr>
		    <td>1</td>
		    <td>2</td>
		    <td>3</td>
		    <td>4</td>
		    <td>5</td>
		    <td>6</td>
		    <td>7</td>
		 </tr>-->
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
		 </tr>
	</table>
	
	<?php
		function func_prox_mes($mes) {
			return this.$mes++;
		}
		function func_ant_mes($mes) {
			return this.$mes--;
		}
	?>