<?php
$ans =NULL;
	if(isset($_POST['form_submit'])) {
        
		$ch = $_POST['option'];
		$string = $_POST['string'];
		switch($ch) {
		case 1:
				$ans = 'Reverse of <b>' . $string . '</b> is <b>' . strrev ( $string ) . '</b>';
				break;
		case 2:
				$ans = 'Length of <b>' . $string . '</b> is <b>' . strlen ( $string ) . '</b>';
				break;
		case 3:
				$ans = 'Substring of <b>' . $string . '</b> is <b>' . substr ( $string , 3 ) . '</b>';
				break;	
		case 4:
				$ans = 'Converting <b>' . $string . '</b> to upper case <b>' . strtoupper ( $string ) . '</b>';
				break;
		case 5:
				$ans = 'Converting <b>' . $string . '</b> to lower case <b>' . strtolower ( $string ) . '</b>';
				break;				
		case 6:
				$ans = 'Number of words in <b>' . $string . '</b> is <b>' . str_word_count ( $string ) . '</b>';
				break;
		default:
			$ans = 'invalid option';
		}
}
?>

<!DOCTYPE html>
<html>
<body>
	<form method="POST">
		<h1>String Menu driven Operation</h1>
		<br>
		<input  type="text" name="string" placeholder="Enter Your String" required><br>
		<br>

		<label> Select your choice</label>
		<select name="option">
    		<option value="1" >Reverse the string</option>
   			<option value="2">Find the length of the string</option>
   			<option value="3">Substring of string </option>
   			<option value="4">Convert to uppercase</option>
   			<option value="5">Convert to lowercase</option>
   			<option value="6">Count the number of words</option>
        </select>
  <br>
  <br>
  <input  type="submit" name="form_submit" value="Submit">
	</form>
	<br>
	<h1><?php echo $ans; ?></h1>
</body>
</html>

