<?php

    //check for unique identifier and set variables
    if(isset($_GET['id']) && is_numeric($_GET['id'])){
        $id = $_GET['id'];
        $servername = 'localhost';
        $username = '';
        $password = '';
        $dbname = 'subscriptions_db';
    }
    //Create the connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    //Connection Check
    if ($conn->connect_error) {
        die("Connection error: ". $conn->connect_error);
    }

        //For form population with data
        $query = "SELECT * FROM subscribers WHERE subscriber_id=$id";
        $results = $conn->query($query);
        if ($results->num_rows>0){
            $row=$results->fetch_assoc();
            $field1 = $row['firstname'];
            $field2 = $row['lastname'];
            $field3 = $row['email'];
            $field4 = $row['postaladdress'];
            $field5 = $row['mobilenumber'];
            $field6 = $row['dateofbirth'];
            $field7 = $row['subscriptiontype'];
            $field8 = $row['deliverymethod'];
        }
            
        
        else echo 'Wrong Identifier Selected!!!!!';

echo '  <!DOCTYPE html>
        <html>

        <head>
            <title>Update Subscriber</title>
            <link rel="stylesheet" href="style.css" type="text/css">
        </head>

        <body>
            <div class="nav">
                <a href="adduser.html">Create New User</a>
                <a href="enterrecord.html">Create New Subscriber</a>
                <a href="viewuser.php">View User</a>
                <a href="viewrecord.php">View Subscibers</a>
                <a href="index.html">HomePage</a>
            </div>

            <div class="entry-form-container">
                <section>
                    <div class="form">
                        <h3>Editing record for ' .$field1.' '.$field2.'</h3>
                        <form action="recordeditor.php?id='.$id.'" method="POST">
                            <div>
                                <label for="firstname">Name</label>
                                <input type="text" name="firstname" autofocus value='.$field1.'>
                                <label for="lastname">Last Name</label>
                                <input type="text" name="lastname" value='.$field2.'>
                            </div>
                            <br>
                            <div>
                                <label for="dob">Date of Birth</label>
                                <input type="date" name="dob" value='.$field6.'>
                                <label for="email">E-Mail Address</label>
                                <input type="text" name="email" value='.$field3.'>
                            </div>
                            <br>
                            <div>
                                <label for="mobile">Mobile Number</label>
                                <input type="text" name="mobile" value='.$field5.'>
                                <label for="postal">Postal Address</label>
                                <input type="text" name="postal" value='.$field4.'>
                            </div>
                            <br>
                            <div>
                                <label for="subscription">Subscription Type</label>
                                <input type="text" name="subscription" value='.$field7.'>
                                <label for="delivery">Delivery Method</label>
                                <input type="text" name="delivery" value='.$field8.'>
                            </div>
                            <br>
                            <div class="btn">
                                <button type="reset" value="Clear">Clear</button>
                                <button type="submit" value="Submit">Submit</button>
                            </div>
                            <br>
                        </form>
                    </div>
                </section>
            </div>
        </body>
        </html>'

?>