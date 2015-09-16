<html>
 <body>
 <?php // sets letter grade variable to NULL and sets grade variable from form data
//	$let_grade = "NULL";
 	$score = $_GET['score'];
 ?>
<p>With a grade of <?php echo $_GET["score"];?>. Your letter grade would be 
<?php //  uses the ternary operator
		$grade= (($score<0)?"you have entered an invalid score.":
				(($score<60)?"F":
				(($score<70)?"D":
				(($score<80)?"C":
				(($score<90)?"B":
				(($score<100)?"A":
		"You have entered an invalid score."))))));
		echo $grade;
?>

.</p>

 </body>
 </html>
