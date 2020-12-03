<!DOCTYPE html>
<html>

<head>
    <title>SUBSCRIBERS</title>
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
//fetch the data from database
$sql = "SELECT * FROM subscribers";

echo '      <div class="display-table-container">
                <section>
                    <div class="table">
                        <h3>View of the subscriber records that are stored in the system</h3>
                        <table>
                            <tr>
                                <th>SubscriberID</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>E-mail</th>
                                <th>Post Address</th>
                                <th>Mobile</th>
                                <th>Date of Birth</th>
                                <th>Subsciption</th>
                                <th>Delivery Method</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>';

$results = $conn->query($sql);
if ($results->num_rows>0){
    while($row=$results->fetch_assoc()){
        $field0 = $row['subscriber_id'];
        $field1 = $row['firstname'];
        $field2 = $row['lastname'];
        $field3 = $row['email'];
        $field4 = $row['postaladdress'];
        $field5 = $row['mobilenumber'];
        $field6 = $row['dateofbirth'];
        $field7 = $row['subscriptiontype'];
        $field8 = $row['deliverymethod'];

        echo '              <tr>
                                <td>'.$field0.'</td>
                                <td>'.$field1.'</td>
                                <td>'.$field2.'</td>
                                <td>'.$field3.'</td>
                                <td>'.$field4.'</td>
                                <td>'.$field5.'</td>
                                <td>'.$field6.'</td>
                                <td>'.$field7.'</td>
                                <td>'.$field8.'</td>
                                <td><a href="deleterecord.php?id='.$field0.'" style="color:red; text-decoration:none; font-weight: bold;">Delete</a></td>
                                <td><a href="editrecord.php?id='.$field0.'" style="color:blue; text-decoration:none; font-weight: bold;">Edit</a></td>
                            </tr>';
    }
}
echo '                  </table>
                    </div>
                </section>
            </div>'
?>
</body>
</html>