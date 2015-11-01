<?php # Survey form
$page_title = 'Survey';
?>
<h1>Survey</h1>

<form action="printSurvey.php" method="post">
	<p>What is your favorite type of Movie? <br>
		<input type="radio" name="movie" value="sci-fi" > Sci-Fi <br>
		<input type="radio" name="movie" value="romance" > Romance <br>
		<input type="radio" name="movie" value="mystery" > Mystery <br>
		<input type="radio" name="movie" value="action" > Action <br>
		<input type="radio" name="movie" value="comedy" > Comedy <br>
		<input type="radio" name="movie" value="drama"> Drama<br></p>	
	<p>What is your favorite color? <br>
		<input type="radio" name="color" value="red" > Red <br>
		<input type="radio" name="color" value="green" > Green <br>
		<input type="radio" name="color" value="blue" > Blue <br>
		<input type="radio" name="color" value="yellow" > Yellow <br>
		<input type="radio" name="color" value="orange" > Orange <br>
		<input type="radio" name="color" value="purple"> Purple <br></p>

	<p>What make of car is your favorite? <br>
		<input type="radio" name="car" value="ford" > Ford <br>
		<input type="radio" name="car" value="chrystler" > Chrystler <br>
		<input type="radio" name="car" value="bmw" > BMW <br>
		<input type="radio" name="car" value="mitsubishi" > Mitsubishi <br>
		<input type="radio" name="car" value="toyota" > Toyota <br>
		<input type="radio" name="car" value="honda"> Honda<br></p>
	<p><input type="submit" name="submit" value="Survey" /></p>
</form>
