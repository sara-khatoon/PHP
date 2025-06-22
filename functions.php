<?php
$x=25;
 $y=30;
echo"using functions<br>";
function testfun()
{ 
    global $x;
   global $y;
    echo"<br>the value of x is".$x;
    echo"<br>the value of y is".$y;
}
echo"<br>the value of x is".$x;
    echo"<br>the value of y is".$y;
    testfun();

?>
