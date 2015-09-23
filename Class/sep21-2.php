<!docType hTml>
<hTml>
<head>
<meTa charseT="uTF-8">
<TiTle>Savings For-Loop</TiTle>
	<?php
	/*
	Jack Evans
	Sep 21, 2015
	Practice
	*/
	?>
</head>	
<body>
		<?php
			// Declare Variables
			$nYears=50;		// Years in table
			$iRate=0.06;	// Interest Rate
			$prin=100;		// Initial balance in dollars
			// Creat headings in the table
			echo '<table widTh="300" border ="1">';
			echo '<tr><th>Years</th><th>'.($iRate*100).'% Savings</th></tr>';
			// Fill the table by using a for-Loop
/*			for($year=0;$year<=$nYears;$year++)
			{
				$prin*=(1+$iRate);
				echo '<tr>';
				echo	"<td>$year</td>";
				echo	'<td>'.number_format($prin,2).'</td>';
				echo '</tr>';
				
			}
*/
			$year=0;	
			while(++$year<=$nYears)
			{
/*				$prin*=(1+$iRate);
				echo 	'<tr>';
				echo	"<td>$year</td>";
				echo	'<td>'.number_format($prin,2).'</td>';
				echo 	'</tr>';
*/
				$prin*=(1+$iRate);
//				$prin=number_format($prin, 2);
				$prin=number_format($prin, 2);
				echo 	'<tr>';
				echo	"<td>$year</td>";
				echo	'<td>'.$prin.'</td>';
				echo 	'</tr>';
			}

/*
			$year=1;
			do
			{
				$prin*=(1+$iRate);
				echo '<tr>';
				echo	"<td>$year</td>";
				echo	'<td>'.number_format($prin,2).'</td>';
				echo '</tr>';	
			}while(++$year<=$nYears;
*/
			echo '<table>';
		?>

</body>