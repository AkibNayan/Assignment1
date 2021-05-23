<?php

	$year = $_POST['year'];
	if($year % 400 == 0){
		echo "This year is leap year";
	}
	else if($year % 100 == 0){
		echo "This year is not a leap year";
	}
	else if($year % 4 ==0){
		echo "This year is leap year";
	}
	else{
		echo "This year is not a leap year";
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Check weather a year is leap year or not</title>
</head>
<body>
	<form action="a1p1.php" method="post">
		<input type="text" name="year"  />
	</form>
</body>
</html>
