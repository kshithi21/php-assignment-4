<html>
<body>
<form method="POST">
<h1>Fibonacci and Prime</h1><br>
Enter Number 1: <input type="number" name="num" ><br>
<input type="submit" name=FIND >
</form>
</body>
</html>

<?php
if(isset($_POST['FIND']))
{
    $num=$_POST['num'];
    
    $n = 0;  
    $n1 = 0;  
    $n2 = 1;  
    $fiboArray=array();

    echo "<h3>Fibonacci series for first $num numbers: </h3><br> ";  
    echo $n1.', '.$n2.', ';  
    while ($n < $num-2 )  
    { 
        $n3 = $n2 + $n1;  
        echo $n3.', ';  
        $n1 = $n2;  
        $n2 = $n3;  
        $n = $n + 1;  
        array_push($fiboArray,$n3);
    }

    echo "<h3>Prime numbers </h3>";
    $div_count=0;  
    for($i=0;$i<count($fiboArray);$i++)
    {   $div_count=0;
        $fnum=$fiboArray[$i];
        if($fnum == 1)
            continue;
        for($j=1;$j<=$fnum;$j++)
        {
            if (($fnum%$j)==0)  
            {  
                $div_count++;  
            }  
        }  
        // echo "<br>$fnum--->$div_count<br>";
        if ($div_count<3)  
        {  
            echo $fnum." , ";  
        } 

    }
}
?>