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
     
	 <?php // calculates pay based on nested switch statements
		$hourly = 10;
		$pay = NULL;
		switch($hours<0)
		{
			case true:
			$pay = 0.00;
			break;
			case false:
				switch($hours<=20)
				{
					case true:
					$pay=$hours*$hourly;
					break;
					case false:
						switch($hours<=40)
						{
							case true:
							$pay = (($hourly*20)+(($hours-20)*($hourly*2)));
							break;
							case false:
							$pay=(($hourly*20)+(($hourly*2)*20)+(($hours-40)*($hourly*3)));
							break;
						}
					}
					break;
		}
		echo $pay;
    ?> 
    
    .</p>

 </body>
</html>