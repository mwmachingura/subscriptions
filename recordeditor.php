<?php
if(isset($_GET['id']) && is_numeric($_GET['id'])){
    $uid = $_GET['id'];
    $servername = 'localhost';
    $uname = '';
    $pword = '';
    $dbname = 'subscriptions_db';

    //Create the connection
    $conn = new mysqli($servername, $uname, $pword, $dbname);
    //Check connection status
    if ($conn->connect_error) {
        die("Connection error: ". $conn->connect_error);
    }

    //Check form for completeness
    //Check form for completeness
    if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['mobile']) && isset($_POST['dob']) && isset($_POST['postal']) && isset($_POST['delivery']) && isset($_POST['subscription'])){
        //Check if data is entered
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
            $sql = "UPDATE subscribers SET firstname='$firstname', lastname='$lastname', dateofbirth='$dob', email='$email', postaladdress='$postal', mobilenumber='$mobile', subscriptiontype='$subscription', deliverymethod='$delivery' WHERE subscriber_id=$uid";
            //Check if data has been sent to database
            if ($conn->query($sql)===TRUE){
                echo 'Record saved. Click <a href="viewrecord.php">here</a> to return to see the record!';
            }
            else echo 'Cannot write to database!!!';
        }
    }
    else echo 'Please complete all fields provide on the form!!! <br>Click the back button to return and check.';
}

?>