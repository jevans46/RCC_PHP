<html>
 <?php /*
 	RCC Class PHP
	Sept 15th, 2015
	Purpose:  Show use of Turnary operator
	   */
 ?>
 <body>
	 <?php // sets score based on information from form data
          $score = $_GET['score'];
     ?>
     
    <p>With a grade of <?php echo $_GET["score"];?>. Your letter grade would be 
     
	<?php // Uses the ternary operator
            
            $grade=(($score<0)?"invalid.":
                   (($score<60)?"F":
                   (($score<70)?"D":
                   (($score<80)?"C":
                   (($score<90)?"B":
                   (($score<=100)?"A":
                   "invalid."))))));
                   
            echo $grade;
    ?>
    
    .</p>

 </body>
</html>