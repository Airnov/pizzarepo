<?php
		if(isset($_POST['submit'])){
			$size = $_POST['size'];
			$toppings = $_POST['toppings'];

			// Calculate pizza cost based on user input
			if($size == "large"){
				$cost = 6.00;
			} elseif($size == "extra_large"){
				$cost = 10.00;
			}

			if($toppings == "1"){
				$cost += 1.00;
			} elseif($toppings == "2"){
				$cost += 1.75;
			} elseif($toppings == "3"){
				$cost += 2.50;
			} elseif($toppings == "4"){
				$cost += 3.35;
			}

			// Calculate tax and total cost
			$tax = $cost * 0.13;
			$total_cost = $cost + $tax;

			// Display order details
			echo "<br><h3>Order Details:</h3>";
			echo "<p>Pizza Cost: $".number_format($cost, 2)."</p>";
			echo "<p>Tax: $".number_format($tax, 2)."</p>";
			echo "<p>Total Cost: $".number_format($total_cost, 2)."</p>";
		}
	?>