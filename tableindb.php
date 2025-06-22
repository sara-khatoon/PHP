<?php
$conn = new mysqli("localhost", "root", "", "myform");
//IMPLEMENTING CRUD OPERATIONS
//CREATE TABLE
// $sql="CREATE TABLE login (
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     name VARCHAR(30) NOT NULL,
//     email VARCHAR(50),
//     phone VARCHAR(15),
//     message TEXT,
//     reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
// )";
// if ($conn->query($sql) === TRUE) {
//     echo "Table myform created successfully";
// } else {
//     echo "Error creating table: " . $conn->error;
// }
// $conn->close();
//INSERTING DATA
// $sql = "INSERT INTO login (name, email, phone, message) VALUES /*('sara', 'sara@gmail.com', '1234567890', 'Hello World'),*/('samya','samya@gmail.com','0987654321','Hi there')";
// if ($conn->query($sql) === TRUE) {
//     echo "New record created successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }
//READING DATA
//$sql = "SELECT id, name, email, phone, message FROM login";
//UPDATE DATA
$sql = "UPDATE login SET name='sara khatoon' where email ='sara@gmail.com'";
if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
//DELETING DATA
$sql = "DELETE FROM login WHERE name='samya'";
if($conn->query($sql) === TRUE) {
    echo"recored deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}
?>