<DOCTYPE! html>
<html>
	<head>
		<title>Palindrome Check using PHP</title>
	</head>
	<body>
		<form method="post">
			Enter the string:<br>
			<input type="string" name="string" id="no">
			<input type="Submit">
		</form>
		<?php
			if($_POST)
			{
				$string = $_POST['string'];
				
				if($string == strrev("$string"))
				{
					echo $string." is Palindrome<br>Reverse of string:".strrev("$string");
				}
				else
				{
					echo $string." is not Palindrome<br>Reverse of string:".strrev("$string");
				}
			}
		?>
	</body>
</html>