<?php 
 
   echo "<form method=POST  >"; 
   $x=array("PEN","WATER COLOUR","MARKER","STAPILAR");
   $p=array(20,30,10,50);
   $c=array("C001","C002","C003","C004");
   echo "Select item ";
   echo "<select name='s' >";
   for($i=0;$i<count($x);$i++)
   {
       echo "<option value='$i'  > $x[$i] </option>";
   }
   echo "</select>";
   echo "<br>";
   echo "<input type=submit name=subm value=Display_Details />";
   echo "</form>";

if(isset($_POST['subm']))
  {  
    $index=$_POST["s"];
    $slno=$index+1;
    echo "<form method=POST action='12b.php' >";
    echo "Sl No : <input type=text value=$slno disabled />";
    echo "<br>";
    echo "Item Selected : <input type=text value=$x[$index] disabled />";
    echo "<br>";
    echo "Price of the Item : <input type=text value=$p[$index] disabled/> ";
    echo "<br>";
    echo "Code of the Item :<input type=text value=$c[$index] disabled/> ";
    echo "<br>";
    echo "Enter the quantity required :<input type=number name=q /> ";
    echo "<br>";
    echo "<input type=hidden name=sel value=$index />";
    echo "<input type=submit value=BILL />";
    echo "</form>";
  }

?>   