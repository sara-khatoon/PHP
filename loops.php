<?php
echo" implementing while loop.<br>";
$a=5;
while($a<=10){
    echo $a;
    echo"<br>";
    $a++;

}
echo"<br><br>";
echo" do while loop<br>";
do{
    echo $a;
    echo"<br>";
    $a++;
}while($a<=15);

echo"<br><br>";
echo "for loop<br>";
for($a=5;$a<10;$a++)
{  echo $a."  Hello this is me";
    echo"<br>";
}
$students=array(1,2,3,4,5,6,7,8,9,10);
foreach( $students as $std){
    echo $std."<br>";
}
?>