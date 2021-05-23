<?php

	$ch = $_POST['character'];
	if(($ch>='a' && $ch<='z') || ($ch>='A' && $ch<='Z')){
		echo "The given character is alphabet";
	}
	else if($ch>='0' && $ch<='9'){
		echo "The given character is digit";
	}
	else{
		echo "The given character is special character";
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>To check weather a character is alphabet or digit or special character</title>
</head>
<body>
	<form action="a1p2.php" method="post">
		<input type="text" name="character">
	</form>
</body>
</html>