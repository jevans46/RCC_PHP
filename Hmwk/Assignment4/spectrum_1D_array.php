<!doctype html>
<html>
    <head>
    <meta charset="utf-8">
    <title>Spectrum 1D Arrays</title>
		<?php
            // Jack Evans
			// HW 4
			// 1D Arrays
        ?>
    </head>
    
    <body>
		<?php
			// Declare Variables
			$nRows = 16;					// Number of rows in table
			$exp = 3;						// Exponent for pow()
			$base = 10; 					// Base for pow()
			$wLength = "Radio"; 			// Default band
			// Declare 1D Arrays
			$rows=array();					// Array for number of rows
			$freq=array();					// Array for frequency
			$wave=array();					// Array for band
			// Fill the arrays
			for($row=1;$row<=$nRows;$row++)
			{
				$rows[$row]=$row;										// Fills in data for the row number
				$freq[$row]=pow($base, $exp);							// Fills in data for the frequency 
				if($exp <= 3 && $exp > 0) $wLength = "Radio";			// Uses if statemets to determin the band
				if($exp <= 0 && $exp > -4) $wLength = "Microwave";
				if($exp <= -4 && $exp > -6) $wLength = "Infrared";
				if($exp <= -6 && $exp > -8) $wLength = "Visible";
				if($exp <= -8 && $exp > -10) $wLength = "Ultraviolet";
				if($exp <= -10 && $exp > -12) $wLength = "X-Ray";
				if($exp <= -12 && $exp > -13) $wLength = "Gama";
				$wave[$row]=$wLength;									// Fills in band based on if statements
				$exp--;
				$freq[$row]=number_format($freq[$row],15,'.','');
			}
			// Create headings in the table
			echo '<table width="300" border="1">';
			echo '<tr><th>Row</th><th>Frequency</th><th>Wave Length</tr>';
			// Fill the table by using a for-loop row by row
			for($row=1;$row<=$nRows;$row++)
			{
				echo '<tr>';
				echo "<td>".$rows[$row]."</td>";
				echo '<td>'.$freq[$row].'</td>';
				echo '<td>'.$wave[$row].'</td>';
				echo '</tr>';
			}
			echo '</table>';
        ?>
    </body>
</html>