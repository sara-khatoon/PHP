<?php
echo"creating a database<br>";
$servername="localhost";
$username="root";
$password="";
$dbname="myform";
//creating a connection
$conn=new mysqli($servername,$username,$password, $dbname);
//checking the connection
if($conn->connect_error){
    die("Connection failed".$conn->connect_error);
}
echo " Connected successfully";


?>