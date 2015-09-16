<html>
 <body>
 <?php // sets letter grade variable to NULL and sets grade variable from form data
	$let_grade = "NULL";
 	$score = $_GET['score'];
 ?>
<p>With a grade of <?php echo $_GET["score"];?>. Your letter grade would be 
<?php // uses if else if else statement to determin grade based off of users input
if($score>0 && $score<100){
		$iscore=(int)($score/10);
		switch($iscore){
			case 10:
			case 9: $grade="A";break;
			case 8: $grade="B";break;
			case 7: $grade="C";break;
			case 6: $grade="D";break;
			case 5: 
			case 4: 
			case 3: 
			case 2: 
			case 1: 
			case 0: $grade="F";break;
			default: $grade="Invalid";
		}
}else{$ grade="invalid";}
echo $grade;
?>

.</p>

 </body>
 </html>
