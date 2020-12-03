<?php

//Check for unique indentifier
if(isset($_GET['id']) && is_numeric($_GET['id'])){
    $id = $_GET['id'];
    $servername = 'localhost';
    $username = '';
    $password = '';
    $dbname = 'subscriptions_db';
    $sql = "DELETE FROM subscribers WHERE subscriber_id=$id";
//Create the connection
$conn = new mysqli($servername, $username, $password, $dbname);
//Connection Check
if ($conn->connect_error) {
    die("Connection error: ". $conn->connect_error);
}
//Completion confirmation
if ($conn->query($sql)===TRUE){
    echo 'Record has been deleted!<br>Click <a href="viewrecord.php">here</a> to go back to view';
}
else echo 'Error in making changes to database!';
}
else echo 'Action Not Authorised!!!!<br>CLick <a href="viewrecord.php">here</a>';
?>