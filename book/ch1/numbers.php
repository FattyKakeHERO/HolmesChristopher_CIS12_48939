<!DOCTYPE html Public "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Numbers</title>
	</head>
	<body>
		<?php
			# Script 1.8 - numbers.php
			
			$quantity = 30;
			$price = 119.95;
			$taxrate = 0.5;
			
			$total = $quantity * $price;
			$total = $total + ($total * $taxrate);
			$total = number_format ($total, 2);
			
			echo '<p>You are purchasing <b>' . $quantity . '</b> widget(s) at a cost of <b>$' . $price . '</b> each. With tax, the total comes to <b>$' . $total . '</b>.</p>';
		?>
	</body>
</html>