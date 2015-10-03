<!doctype html>
<html>
    <head>
    <meta charset="utf-8">
    <title>Spectrum 2D Arrays</title>
		<?php
            // Jack Evans
			// HW 4
			// 2D Arrays
        ?>
    </head>
    
    <body>
		<?php
			// Declare Variables
			$nRows=16;  				// Number of rows in table
			$base=10;   				// Declare base of 10 for scientific notation
			$exp = 3;					// Beginning exponent
			$total = 0;					// The answer to pow()
			$wLength = "Radio"; 		// Band of wave length
			//Declare 2D array
			$freq = array
			(
			array($total),				// Frequency
			array($wLength),			// Wave Length
			);
			// Fill array
			for($i=1;$i<=$nRows;$i++)
			{
				$total = number_format(pow($base, $exp),15,'.','');
				$freq[0][$i]=$total;
				if($exp <= 3 && $exp > 0) $freq[1][$i] = "Radio";
				if($exp <= 0 && $exp > -4) $freq[1][$i] = "Microwave";
				if($exp <= -4 && $exp > -6) $freq[1][$i] = "Infrared";
				if($exp <= -6 && $exp > -8) $freq[1][$i] = "Visible";
				if($exp <= -8 && $exp > -10) $freq[1][$i] = "Ultraviolet";
				if($exp <= -10 && $exp > -12) $freq[1][$i] = "X-Ray";
				if($exp <= -12) $freq[1][$i] = "Gama";
				$exp--;
			} 
			$nRows = 16;				// Reset nRows to the correct number
			//Create headings in the table
			echo '<table width="300" border="1">';
			echo '<tr><th>Rows</th><th>Frequency</th><th>Band</th></tr>';
			//Fill the table by using a for-loop row by row
			for($row=1;$row<=$nRows; $row++)
			{
				echo '<tr>';
				echo "<td>". $row."</td>";
				echo "<td>". $freq[0][$row] ."</td>";
				echo "<td>". $freq[1][$row] ."</td>";
			}
			echo '</tr></table>';
        ?>
    </body>
</html>