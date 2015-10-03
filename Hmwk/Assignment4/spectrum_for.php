<!doctype html>
<html>
    <head>
    <meta charset="utf-8">
    <title>Spectrum No Arrays</title>
		<?php
            //Jack Evans
            //HW 4
            //Purpose:  Practice php with no arrays
        ?>
    </head>
    
    <body>
		<?php
		    //Declare Variables
			$base=10;  //Sets base to 10 for sci-notation
			echo '<table width="400" border="1">'; // Begin table
			// Creates table headers
			echo '<tr><th>Row Number</th><th>Wavelength</th><th>Band</th></tr>';
			// Pump out data to rows line by line
			echo '<tr><td>1</td>';
			echo '<td>'.number_format(pow($base, 3),15).'</td>';
			echo '<td>Radio</td></tr>';
			echo '<tr><td>2</td>';
			echo '<td>'.number_format(pow($base, 2),15).'</td>';
			echo '<td>Radio</td></tr>';
			echo '<tr><td>3</td>';
			echo '<td>'.number_format(pow($base, 1),15).'</td>';
			echo '<td>Radio</td></tr>';
			echo '<tr><td>4</td>';
			echo '<td>'.number_format(pow($base, 0),15).'</td>';
			echo '<td>Microwave</td></tr>';
			echo '<tr><td>5</td>';
			echo '<td>'.number_format(pow($base, -1),15).'</td>';
			echo '<td>Microwave</td></tr>';
			echo '<tr><td>6</td>';
			echo '<td>'.number_format(pow($base, -2),15).'</td>';
			echo '<td>Microwave</td></tr>';
			echo '<tr><td>7</td>';
			echo '<td>'.number_format(pow($base, -3),15).'</td>';
			echo '<td>Microwave</td></tr>';
			echo '<tr><td>8</td>';
			echo '<td>'.number_format(pow($base, -4),15).'</td>';
			echo '<td>Infrared</td></tr>';
			echo '<tr><td>9</td>';
			echo '<td>'.number_format(pow($base, -5),15).'</td>';
			echo '<td>Infrared</td></tr>';
			echo '<tr><td>10</td>';
			echo '<td>'.number_format(pow($base, -6),15).'</td>';
			echo '<td>Visible</td></tr>';
			echo '<tr><td>11</td>';
			echo '<td>'.number_format(pow($base, -7),15).'</td>';
			echo '<td>Visible</td></tr>';
			echo '<tr><td>12</td>';
			echo '<td>'.number_format(pow($base, -8),15).'</td>';
			echo '<td>Ultraviolet</td></tr>';
			echo '<tr><td>13</td>';
			echo '<td>'.number_format(pow($base, -9),15).'</td>';
			echo '<td>Ultraviolet</td></tr>';
			echo '<tr><td>14</td>';
			echo '<td>'.number_format(pow($base, -10),15).'</td>';
			echo '<td>X-Ray</td></tr>';
			echo '<tr><td>15</td>';
			echo '<td>'.number_format(pow($base, -11),15).'</td>';
			echo '<td>X-Ray</td></tr>';
			echo '<tr><td>16</td>';
			echo '<td>'.number_format(pow($base, -12),15).'</td>';
			echo '<td>Gama</td></tr>';
			echo '</table>'; // Close table
        ?>
    </body>
</html>