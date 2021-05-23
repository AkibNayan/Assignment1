<?php
	
	$basic_salary = $_POST['basic'];
	if($basic_salary <= 10000){
		$HRA = $basic_salary * (20/100);
		$DA = $basic_salary * (80/100);
		$gross_salary = $basic_salary + $HRA + $DA;

		echo "Gross salary of an employee according to basic salary is ".$gross_salary;
	}
	else if($basic_salary > 10000 && $basic_salary <= 20000){
		$HRA = $basic_salary * (25/100);
		$DA = $basic_salary * (90/100);
		$gross_salary = $basic_salary + $HRA + $DA;

		echo "Gross salary of an employee according to basic salary is ".$gross_salary;
	}
	else{
		$HRA = $basic_salary * (30/100);
		$DA = $basic_salary * (95/100);
		$gross_salary = $basic_salary + $HRA + $DA;

		echo "Gross salary of an employee according to basic salary is ".$gross_salary;
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Find Gross Salary</title>
</head>
<body>
	<form action="a1p3.php" method="post">
		<input type="text" name="basic">
	</form>
</body>
</html>