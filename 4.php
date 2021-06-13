<html>
<body>
<form method="POST">
<h1>Armstrong Number</h1>
Enter Number: <input type="number" name="num" >
<input type="submit" name=FIND >
</form>
</body>
</html>


<?php
if(isset($_POST['FIND']))
{
    $num=$_POST['num'];
    $total=0;  
    $x=$num;  
    while($x!=0)  
    {  
    $rem=$x%10;  
    $total=$total+$rem*$rem*$rem;  
    $x=$x/10;  
    }  

    if($total==$num)
    {
        echo "<br> $num is an Armstrong number";
    }
    else
    {
        echo "<br> $num is NOT an Armstrong number";
    }
}
?>