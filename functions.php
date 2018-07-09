<?php

	if (isset($_GET['submit'])) {
		$result1 = $_GET['num1'];
		$result2 = $_GET['num2'];
		$operator = $_GET['operator'];
		switch ($operator) {
			case 'None':
				echo "Please, enter a meathod";
				break;
			case '+':
				echo $result1 + $result2;
				break;
			case '-':
				echo $result1 - $result2;
				break;
			case '*':
				echo $result1 * $result2;
				break;
			case '/':
				echo $result1 / $result2;
				break;
			
		}
	}

?>