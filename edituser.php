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
        $query = "SELECT * FROM users WHERE user_id=$id";
        $results = $conn->query($query);
        if ($results->num_rows>0){
            $row=$results->fetch_assoc();
            $field1 = $row['firstname'];
            $field2 = $row['lastname'];
            $field3 = $row['username'];
            $field4 = $row['email'];
            $field5 = $row['mobilenumber'];
            $field6 = $row['dateofbirth'];
            $field7 = $row['residentialaddress'];
            $field8 = $row['department'];
        }
            
        
        else echo 'Wrong Identifier Selected!!!!!';

echo '  <!DOCTYPE html>
        <html>

        <head>
            <title></title>
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
                    <h3>Editing user ' .$field1.' '.$field2.'.<br> Please enter correct details</h3>
                    <form action="usereditor.php?id='.$id.'" method="POST">
                        <div>
                            <label for="firstname">Name</label>
                            <input type="text" name="firstname" autofocus value="'.$field1.'">
                            <label for="lastname">Last Name</label>
                            <input type="text" name="lastname" value="'.$field2.'">
                        </div>
                        <br>
                        <div>
                            <label for="username">User Name</label>
                            <input type="text" name="username" value="'.$field3.'">
                            <label for="email">E-Mail Address</label>
                            <input type="text" name="email" value="'.$field4.'">
                        </div>
                        <br>
                        <div>
                            <label for="mobile">Mobile Number</label>
                            <input type="text" name="mobile" value="'.$field5.'">
                            <label for="dob">Date of Birth</label>
                            <input type="date" name="dob" value="'.$field6.'">
                        </div>
                        <br>
                        <div>
                            <label for="residental">Residental Address</label>
                            <input type="text" name="residential" value="'.$field7.'">
                            <label for="department">Department</label>
                            <input type="text" name="department" value="'.$field8.'">
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