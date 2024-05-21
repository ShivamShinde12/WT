<?php
	$n = 10;
	$k = $n;
	for ($i = 0; $i < $n; $i++)
	{
		for ($j = 0; $j < $k; $j++)
			echo "&nbsp";

		$k = $k - 1;

		for ($j = 0; $j <= $i; $j++ )
		{
			echo "* ";
		}
		echo "<br>";
	}
?>