<html>
 <body>
 <?php // sets letter grade variable to NULL and sets grade variable from form data
	$let_grade = "NULL";
 	$score = $_GET['score'];
 ?>
<p>With a grade of <?php echo $_GET["score"];?>. Your letter grade would be 
<?php // uses if else if else statement to determin grade based off of users input
		if($score<0)	$grade="You have entered an invalid grade.";
		else if($score<60)	$grade="F";
		else if($score<70)	$grade="D";
		else if($score<80)	$grade="C";
		else if($score<90)	$grade="B";
		else if($score<100)	$grade="A";
		echo $grade;
		
		/*
		if ($grade < 60)
		{
			echo 'F';
		}
		else if ($grade >= 60 && $grade <70)
		{
			echo  "D";
		}
		else if ($grade >= 70 && $grade <80)
		{
			echo  "C";
		}
		else if ($grade >= 80 && $grade <90)
		{
			echo  "B";
		}
		else if ($grade >= 90)
		{
			echo  "A";
		}
		else
		{
			echo "You have entered an invalid grade.";
		}
		*/
?>

.</p>

 </body>
 </html>
