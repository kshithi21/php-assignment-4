<html>
<body>
<form method="POST">
<h1>Calculate</h1><br>
Enter Number 1: <input type="number" name="op1" ><br>
Enter Number 2: <input type="number" name="op2" ><br>
Select Opeartion
<select name="op" >
<option value="add">ADD</option>
<option value="sub">SUBTRACT</option>
<option value="mul">MULTIPLICATION</option>
<option value="div">DIVISION</option>
</select><br>
<input type="submit" name=FIND >
</form>
</body>
</html>


<?php
if(isset($_POST['FIND']))
{
    $op=$_POST['op'];
    $op1=$_POST['op1'];
    $op2=$_POST['op2'];

    switch($op)
    {
        case "add": $val=$op1+$op2;
                    echo "$op1 + $op2 = $val" ;
                    break;
        case "sub":$val=$op1-$op2;
                   echo "$op1 - $op2 = $val" ;
                     break;
        case "mul":$val=$op1*$op2;
        echo "$op1 * $op2 = $val" ;
                    break;    
        case "div":$val=$op2/$op1;
        echo "$op2 / $op1 = $val" ;
                    break;            
    }
}
?>