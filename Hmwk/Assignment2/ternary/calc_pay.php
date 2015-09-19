<html>
 <?php /*
 	RCC Class PHP
	Sept 15th, 2015
	Purpose:  Ternary Operator Example
	   */
 ?>
 <body>
	 <?php // sets numb of hours worked based on information from form data
          $hours = $_GET['hours'];
     ?>
     
    <p>You have worked for <?php echo $_GET["hours"];?> hours. Your paycheck will be:	$
     
	<?php // Uses the ternary operator
            $hourly1 = 10;
			$hourly2 = 20;
			$hourly3 = 30;
            $pay=(($hours<1)?"0.00 because you are lazy":
                   (($hours<21)?$hours*$hourly1:
                   (($hours<41)?$hourly1*20+(($hours-20)*$hourly2):
                   (($hours>40)?$hourly1*20+$hourly2*20+(($hours-40)*$hourly3):
				   "invalid"))));
                   
            echo $pay;
    ?>
    
    .</p>

 </body>
</html>