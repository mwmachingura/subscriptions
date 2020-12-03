<?php
$servername = 'localhost';
$username = '';
$pword = '';
$dbname = 'subscriptions_db';

//Create the connection
$conn = new mysqli($servername, $username, $pword, $dbname);
//Connection Check
if ($conn->connect_error) {
    die("Connection error: ". $conn->connect_error);
}
//Check form for completeness
if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['username']) && isset($_POST['email']) && isset($_POST['mobile']) && isset($_POST['dob']) && isset($_POST['residential']) && isset($_POST['department'])){
	if(!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['mobile']) && !empty($_POST['dob']) && !empty($_POST['residential']) && !empty($_POST['department'])){
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $uname = $_POST['username'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $dob = $_POST['dob'];
        $residential = $_POST['residential'];
        $department = $_POST['department'];
        //Query to write to database
        $sql = "INSERT INTO users (firstname, lastname, username, email, mobilenumber, dateofbirth, residentialaddress, department) Values('$fname', '$lname', '$uname', '$email', '$mobile', '$dob', '$residential', '$department')";
        //Check if data has been sent to database
        if ($conn->query($sql)===TRUE){
            echo 'Record has been saved. Click <a href="adduser.html">here</a> to return to form';
        }
    }
}
else echo 'Please complete all fields provide on the form!!! <br>Click the back button to return and check.'


?>