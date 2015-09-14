<html>
 <body>
 <?php
    $let_grade = "NULL";
 	$grade = $_GET['grade'];
 ?>
<p>With a grade of <?php echo $_GET["grade"];?>. Your letter grade would be 
<?php
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
?>

.</p>

 </body>
 </html>
