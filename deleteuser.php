<?php

//Check for unique indentifier and set variables
if(isset($_GET['id']) && is_numeric($_GET['id'])){
    $id = $_GET['id'];
    $servername = 'localhost';
    $username = '';
    $password = '';
    $dbname = 'subscriptions_db';
    $sql = "DELETE FROM users WHERE user_id=$id";
//Create the connection
$conn = new mysqli($servername, $username, $password, $dbname);
//Connection Check
if ($conn->connect_error) {
    die("Connection error: ". $conn->connect_error);
}
//Confirm completion
if ($conn->query($sql)===TRUE){
    echo 'Record has been deleted!<br>Click <a href="viewuser.php">here</a> to go back to view';
}

else echo 'Error in making changes to database!';
}
else echo 'Action Not Authorised!!!!<br>CLick <a href="viewuser.php">here</a>';
?>