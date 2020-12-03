<?php
$servername = 'localhost';
$username = '';
$password = '';
$dbname = 'subscriptions_db';

//Create the connection
$conn = new mysqli($servername, $username, $password, $dbname);
//Connection Check
if ($conn->connect_error) {
    die("Connection error: ". $conn->connect_error);
}
//Check form for completeness
if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['mobile']) && isset($_POST['dob']) && isset($_POST['postal']) && isset($_POST['delivery']) && isset($_POST['subscription'])){
	if(!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['email']) && !empty($_POST['mobile']) && !empty($_POST['dob']) && !empty($_POST['postal']) && !empty($_POST['delivery']) && !empty($_POST['subscription'])){
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $dob = $_POST['dob'];
        $postal = $_POST['postal'];
        $subscription = $_POST['subscription'];
        $delivery = $_POST['delivery'];
        //Query to write to database
        $sql = "INSERT INTO subscribers (firstname, lastname, dateofbirth, email, postaladdress, mobilenumber, subscriptiontype, deliverymethod) Values('$firstname', '$lastname', '$dob', '$email', '$postal', '$mobile', '$subscription', '$delivery')";
        //Checking if data has been written to database
        if ($conn->query($sql)===TRUE){
            echo 'Record has been saved. Click <a href="enterrecord.html">here</a> to return to form';
        }
        else echo 'Record not saved. Please revise the details!!!!!';
    }
}
else echo 'Please complete all fields provide on the form!!! <br><a href="enterrecord.html">Back</a>'

?>