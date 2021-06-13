<html>
<head>
  <style>
  #billtable
  {
	border:5px solid black;
	height:320;
	width:500;
	background-color:ivory;
  }
  #title
  {
	background-color:coral;
	text-align:center;
  }	
  </style>
</head>
<body>  
<?php
   $x=array("PEN","WATER COLOUR","MARKER","STAPILAR");
   $p=array(20,30,10,50);
   $c=array("C001","C002","C003","C004");

   $index=$_POST['sel'];
   $q=$_POST['q'];


   $date=date("d-m-Y");
   
   if( empty($q))
	   die ("Please enter the number of quantity");
   else
   {   $total=$p[$index] * $q ;
       echo "<h1>ABC Stationaries</h1>";
	   echo"<table id=billtable border=1 >";
	   echo"<tr> <td colspan=6 style='text-align:center;'><h1>Bill</h1> </td> </tr>";
	   echo"<tr id=title > <td>Date </td> <td>Item Name</td> <td>Item Code</td> <td>Item Price</td> <td>Item Quantity</td> <td>Total Cost</td></tr>";
	   echo"<tr> 
          <td> $date</td>
          <td> $x[$index] </td> 
          <td> $c[$index] </td> 
          <td> $p[$index] </td> 
          <td> $q </td> 
          <td> Rs $total/- </td> </tr>";
	   echo"</table>";
	   echo"<h2>Thankyou For Shopping With US!</h2>";
   }
   
?>   