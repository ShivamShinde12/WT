<html>
	<head>
		<title>Sum of Series Program using loop in PHP</title>
	</head>
	<body>
		<form method="post">
			Enter the Number of Integers to Sum:<br>
			<input type="number" name="number" id="no">
			<input type="submit">
		</form>
		<?php
			if($_POST){
				$Sum = 0;
				//getting value from input text box 'number'
				$n = $_POST['number'];
				echo "Sum of first $n integers:<br><br>";
				//start loop
				for($i = 0; $i <= $n; $i++){
					$Sum = $Sum + $i;
				}
				echo $Sum . "<br>";
			}
		?>
	</body>
</html>