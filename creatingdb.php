<?php
echo"creating a database<br>";
$servername="localhost";
$username="root";
$password="";
$dbname="myform";
//create a database
$sql="CREATE DATABASE myform";
if(mysqli_query($conn,$sql)){
    echo "Database created successfully";
}
else{
    echo"Error creating databases: ".mysqli_error($conn);

}
mysqli_close($conn);
?>