<!doctype html>
<html>
    <head>
    <meta charset="utf-8">
    <title>Savings For-Loop</title>
		<?php
            //Jack Evans
            //Date:  Sept 22, 2015
            //Purpose:  Practice loops
        ?>
    </head>
    
    <body>
		<?php
		     //Declare Variables
			 $nYears=50;  //Number of years in table
			 $iRate=0.05; //Interest Rate
			 $variableRate = $iRate; // Variable intrest rate used for table headers and calculations
			 $prin=100;   //Sets initial Balance in $'s for table column 2
			 $prin2=100;   //Sets initial Balance in $'s for table column 3
			 $prin3=100;   //Sets initial Balance in $'s for table column 4
			 $prin4=100;   //Sets initial Balance in $'s for table column 5
			 $prin5=100;   //Sets initial Balance in $'s for table column 6
			 $prin6=100;   //Sets initial Balance in $'s for table column 7
			 //Create table
			 echo '<table width="200" border="1">';
			 echo '<tr><th>Years</th>';
			 // loop to create headers
			 for($i = 0; $i < 6; $i++) 
			 {
				echo '<th>'.($variableRate*100).'% Savings</th>';
				$variableRate = $variableRate + 0.01;
			 }
			echo '</tr>';
			 //Reset variable rate and fill the table by using a  for-loop
			$variableRate = $iRate;
			 for($year=1;$year<=$nYears;$year++)
			 {
				 echo '<tr>';
				 echo "<td>$year</td>";
				 $variableRate = $iRate;
				 $prin*=(1+$variableRate);
				 echo '<td>$'.number_format($prin,2).'</td>';
				 $prin2*=(1+$variableRate + 0.01);
				 echo '<td>$'.number_format($prin2,2).'</td>';
				 $prin3*=(1+$variableRate + 0.02);
				 echo '<td>$'.number_format($prin3,2).'</td>';
				 $prin4*=(1+$variableRate + 0.03);
				 echo '<td>$'.number_format($prin4,2).'</td>';
			 	 $prin5*=(1+$variableRate + 0.04);
				 echo '<td>$'.number_format($prin5,2).'</td>';
			 	 $prin6*=(1+$variableRate + 0.05);
				 echo '<td>$'.number_format($prin6,2).'</td>';
				 echo '</tr>';
			 }				
        	 echo '</table>';
        ?>
    </body>
</html>