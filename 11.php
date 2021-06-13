<html>
	<head>
    <style>
        .h{
            width:200px;
            padding:10px;
            background-color:black;
            color:white;
            text-algn:center;
        }
        td{
            text-align:center;
        }
    </style>
	</head>

	<body style="font-size:40;">
	
	<h1 >Item store</h1>
	<?php
	if(!isset($_POST['process']))
	{
		echo "<form method=post  >";
            echo"<table>";
            echo"<tr><td>Enter the item names:</td><td><input type=text name=inam /></td></tr>";
            echo"<tr><td>Enter the item price:</td><td><input type=text name=icos /></td></tr>";
            echo"<tr><td ><input type=submit name=process value='Store'  /> </td>";
            echo"<td ><input type=reset /> </td></tr>";
            echo"</table>";
		echo "</form>";
	}
	else
	{
        $item=$_POST['inam'];
        $price=$_POST['icos'];

        $nameArray=explode(',',$item);
        $costArray=explode(',',$price);

        if(empty($item || $price))
        {
            echo "Do not leave any field blank";
        }
        else if(count( $nameArray) != count($costArray))
        {
            echo "Number of items and number of values are not equal";
        }
        else{
            echo"<table>";
            echo "<tr><td class=h >Name</td><td class=h >Cost</td></tr>";
            for($i=0;$i<count($nameArray);$i++)
            {
                echo "<tr><td> $nameArray[$i] </td><td> $costArray[$i] </td></tr>";
            }
            echo "</table>";
        }

        $low=min($costArray);
        $high=max($costArray);
        for($i=0;$i<count($costArray);$i++)
        {
            if($costArray[$i]==$low)
            {
                echo "Item with lowest cost is : ".$nameArray[$i]."<br>";
            }
            if($costArray[$i]==$high)
            {
                echo "Item with highest cost is : ".$nameArray[$i]."<br>";
            }
        }

	}
	?>
	</body>
</html>