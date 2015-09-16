<html>
 <?php /*
 	RCC Class PHP
	Sept 15th, 2015
	Purpose:  Show use of if statement
	   */
 ?>
 <body>
	 <?php // sets numb of hours worked based on information from form data
          $hours = $_GET['hours'];
     ?>
     
    <p>You have worked for <?php echo $_GET["hours"];?> hours. Your paycheck will be:	$
     
	 <?php // Uses independent else if statements
			$hourly=10;
            if($hours<1)                        $pay="Nothing because you are lazy";
			else if($hours>=1  && $hours<21)    $pay=$hours*$hourly;
			else if($hours>=21 && $hours<41)    $pay=(($hourly*20)+(($hours-20)*($hourly*2)));
			else if($hours>=41			   )    $pay=(($hourly*20)+(($hourly*2)*20)+(($hours-40)*($hourly*3)));
                   
            echo $pay;
    ?> 
    
    .</p>

 </body>
</html>