<html>
<body>
<?php
echo"<h1>Root of random number</h1>";
$rand=rand(1,100);
$root=sqrt($rand);
echo "<br>Random number: ".$rand;
echo "<br>Root of ".$rand." = ".$root;
?>
</body>
</html>