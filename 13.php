
<!DOCTYPE html>
<html>
<body>
		<h2>Factorial of a Number</h2>
		<form method="POST">
			<input type="number" name="num" placeholder="Enter number">
			<input type="submit" name="submit" value=FIND>
		</form>
</body>
</html>

<?php

	if(isset($_POST['submit'])) 
	{
		
		$num = $_POST['num'];
		

		if($num==NULL || $num<0 )
		{
			echo "Please Enter a positive number!";
		}
		else {
			$val = fact($num);
			echo "factorial of the number is=".$val;
		}

	}

	function fact($n)
	{
		if($n >= 0)
		{
			if($n == 0)
			{
				return 1;
			}
			else 
			{	
				return $n * fact($n-1);
			}
		}

	}
  
?>