<html>
<body>
<form method="POST">
Enter Number: <input type="number" name="num" >
<input type="submit" name=FIND >
</form>
</body>
</html>


<?php
if(isset($_POST['FIND']))
{
    $num=$_POST['num'];
    $dup=$num;
    $sum=0;
    $revnum=0;
    while(floor($dup)) 
    {  
        $rem = $dup % 10;  
        $sum=$sum+$rem;
        $revnum = ($revnum * 10) + $rem;  
        $dup = $dup/10;  
    }  
    echo "<br>SUM: $sum ";
    echo "<br>REVERSE: $revnum";
    if($revnum==$num)
    {
        echo "<br> $num is a palindrome";
    }
    else
    {
        echo "<br> $num is NOT a  palindrome";
    }
}
?>