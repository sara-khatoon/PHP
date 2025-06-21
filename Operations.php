<?php
echo "Now, we are going to use arithhmatic operations in PHP.";
echo "<br><br>";    
// Addition
$a = 10;
$b = 20;
$sum = $a + $b; 
echo "The sum of $a and $b is: $sum";
echo "<br>";    
// Subtraction
$c = 30;
$d = 15;
$difference = $c - $d;
echo "The difference between $c and $d is: $difference";
echo "<br>";
// Multiplication
$e = 5;
$f = 4;
$product = $e * $f;
echo "The product of $e and $f is: $product";
echo "<br>";
// Division
$g = 40;
$h = 8;
$quotient = $g / $h;
echo "The quotient of $g and $h is: $quotient";
echo "<br>";
// Modulus
$i = 17;
$j = 5;
$remainder = $i % $j;
echo "The remainder when $i is divided by $j is: $remainder";
echo "<br>";
// Exponentiation
$k = 2; 
$l = 3;
$power = $k ** $l;
echo "The result of $k raised to the power of $l is: $power";
echo "<br><br>";

echo "Next are some assignment operations in PHP.";
echo "<br><br>";
// Assignment Operations
$x = 10;
$y = 5;
$x += $y; // $x = $x + $y
echo "After adding $y, the value of x is: $x";
echo "<br>";
$z = 20;
$z -= $y; // $z = $z - $y
echo "After subtracting $y, the value of z is: $z";
echo "<br>";
$w = 4;
$w *= $y; // $w = $w * $y
echo "After multiplying by $y, the value of w is: $w";
echo "<br>";
$u = 100;
$u /= $y; // $u = $u / $y   
echo "After dividing by $y, the value of u is: $u";
echo "<br><br>";
echo "Now, we will explore comparison operations in PHP.";
echo "<br><br>";    
// Comparison Operations
$a = 10;    
$b = 20;
if ($a == $b) {
    echo "$a is equal to $b";
} else {
    echo "$a is not equal to $b";
}
echo "<br>";
if ($a != $b) {
    echo "$a is not equal to $b";
} else {
    echo "$a is equal to $b";
}
echo "<br>";
if ($a < $b) {
    echo "$a is less than $b";
} else {
    echo "$a is not less than $b";
}
echo "<br>";
if ($a > $b) {
    echo "$a is greater than $b";
} else {
    echo "$a is not greater than $b";
}
echo "<br>";
if ($a <= $b) {
    echo "$a is less than or equal to $b";
} else {
    echo "$a is not less than or equal to $b";
}
echo "<br>";
if ($a >= $b) {
    echo "$a is greater than or equal to $b";
} else {
    echo "$a is not greater than or equal to $b";
}
echo "<br><br>";
echo "Next, we will look at logical operations in PHP.";
echo "<br><br>";
// Logical Operations
$x = 10;
$y = 15;
if ($x<20 && $y<10) {
    echo "Both x and y are true";
} else {
    echo "Either x or y is false";
}
echo "<br>";
if ($x<20 || $y<10) {
    echo "Either x or y is true";
} else {
    echo "Both x and y are false";
}
echo "<br>";
if (!($x < 20)) {
    echo "x is not less than 20";
} else {
    echo "x is less than 20";
}
echo "<br><br>";
echo "Finally, all operations are completed in PHP.";
echo "<br>";

?>