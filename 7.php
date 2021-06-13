<!DOCTYPE html>

<head>
	<title> Electricity Bill</title>
</head>

<?php
$result_str = $result = '';
if (isset($_POST['submit'])) {
    $units = $_POST['units'];
    if (!empty($units)) {

        $unit_cost_first = 3.00;
        $unit_cost_second = 4.00;
        $unit_cost_third = 5.00;
        $unit_cost_fourth = 6.00;

        if($units <= 100) {
            $bill = $units * $unit_cost_first;
        }
        elseif($units > 100 && $units <= 200) {
            $temp = 100 * $unit_cost_first;
            $remaining_units = $units - 100;
            $bill = $temp + ($remaining_units * $unit_cost_second);
        }
        elseif($units > 200 && $units <= 300) {
            $temp = (100 *$unit_cost_first) + (100 * $unit_cost_second);
            $remaining_units = $units - 200;
            $bill = $temp + ($remaining_units * $unit_cost_third);
        }
        else {
            $temp = (100 * $unit_cost_first) + (100 * $unit_cost_second) + (100 * $unit_cost_third);
            $remaining_units = $units - 300;
            $bill = $temp + ($remaining_units * $unit_cost_fourth);
        }
            $result_str = 'Total amount of ' . $units . ' Unit is - ' . number_format((float)$bill, 2, '.', '');
    }
}
?>

<body>
	<div >
		<h1 >Electricity Bill</h1>
        <br>
		<form action="" method="post" >
            	<input  type="number" name="units" placeholder="Please enter units" />
                <br>
                <br>
            	<center><input type="submit" name="submit" id="unit-submit" value="Check" /></center>
		</form>
		<div>
		    <h1 ><?php echo '<br />' . $result_str; ?></h1>
		</div>
	</div>
</body>
</html>