<html>
 <head>
<title>Exercise 1</title>
</head>
 <body>

   <?php
     $var1 = "Birmingham";
   $var2 = "City";
   echo $var1."<br>";
   echo $var2."<br>";
 ?>

 <br>
 <br>


<?php

$x = 15;
$y = 8;

$a = $x + $y;
print "$x + $y = $a";
print "<br>";

$a = $x - $y;
print "$x - $y = $a";
print "<br>";

$a = $x * $y;
print "$x * $y = $a";
print "<br>";

$a = $x / $y;
print "$x / $y = $a";
print "<br>";

$a = $x % $y;
print "$x % $y = $a";
print "<br>";

?>

<br>
<br>

<?php


  $var = 8;
  echo $var;
  echo "<br>";

  $var = $var + 2;
  echo $var;
  echo "<br>";

  $var = $var - 4;
echo $var;
echo "<br>";

$var = $var  *5;
echo $var;
echo "<br>";

$var = $var  /3;
echo $var;
echo "<br>";

$var = $var + 1;
echo $var;
echo "<br>";

$var = $var  -1;
echo $var;
echo "<br>";
?>

<br>
<br>

<?php
  echo var_dump("Harry") . "<br>";
  echo var_dump(28) . "<br>";
  echo var_dump(null) . "<br>";
?>
<br>
<br>

<?php
  $around = "around";
  echo "What goes $around comes $around";
?>
<br>
<br>

<?php
  $whatis = "asdasd";
  echo "Value is" . gettype($whatis) . "<br> \n";
  $whatis = 88.88;
  echo "Value is" . gettype($whatis) . "<br> \n";
  $whatis = true;
  echo "Value is" . gettype($whatis) ."<br> \n";
  $whatis = 88;
  echo "Value is" . gettype($whatis) . "<br> \n";
  $whatis  = null;
  echo "Value is" . gettype($whatis) . "<br> \n";
?>


</body>
</html>
