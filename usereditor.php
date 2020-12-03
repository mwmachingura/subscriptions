<?php
if(isset($_GET['id']) && is_numeric($_GET['id'])){
    $sid = $_GET['id'];
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
    if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['username']) && isset($_POST['email']) && isset($_POST['mobile']) && isset($_POST['dob']) && isset($_POST['residential']) && isset($_POST['department'])){
        //check for values in the required fields
        if(!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['mobile']) && !empty($_POST['dob']) && !empty($_POST['residential']) && !empty($_POST['department'])){
            $fistname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $username = $_POST['username'];
            $email = $_POST['email'];
            $mobile = $_POST['mobile'];
            $dob = $_POST['dob'];
            $residential = $_POST['residential'];
            $department = $_POST['department'];
            //Query to write to database
            $sql = "UPDATE users SET firstname='$fistname', lastname='$lastname', username='$username', email='$email', mobilenumber='$mobile', dateofbirth='$dob', residentialaddress='$residential', department='$department' WHERE user_id=$sid";
            //Check if data has been sent to database
            if ($conn->query($sql)===TRUE){
                echo 'Record saved. Click <a href="viewuser.php">here</a> to return to see the record!';
            }
            else echo 'Cannot write to database!!!';
        }
    }
    else echo 'Please complete all fields provide on the form!!! <br>Click the back button to return and check.';
}

?>